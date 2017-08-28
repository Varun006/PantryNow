<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Coupon;
use App\Product;
use App\ShippingAddress;
use App\zipcode;
use Illuminate\Support\Facades\Storage;

class CartController extends Controller
{
    public function check()
    {
        $exist = Cart::where(['product_id' => request('id'), 'user_id' => auth()->id()])->exists();

        return response()->json([
            'exist' => $exist
        ]);
    }

    public function store()
    {
        $success = false;

        $zip = false;

        if (auth()->check() && $this->validZip()) {

            Cart::create(['product_id' => request('id'), 'user_id' => auth()->id()]);

            $success = true;
        }

        return response()->json([
            'success' => $success,
            'auth' => auth()->check(),
            'zip' => $zip
        ]);
    }

    protected function validZip()
    {
        $user_zip = ShippingAddress::where('user_id', auth()->id())->value('zip');

        return zipcode::where('zip', $user_zip)->exists();
    }

    public function getCartItems($array = false)
    {
        $items = Cart::where('user_id', auth()->id())->get();

        $products = $items->map(function ($p) {
            return Product::find($p->product_id);
        })->each(function ($product) {
            $product->photo_url = Storage::disk('s3')->url('products/' . $product->photo);
            $product->quantity = Cart::where(['user_id' => auth()->id(), 'product_id' => $product->id])->pluck('quantity')->first();
        });

        if ($array) {
            return $products;
        }

        return response()->json([
            'products' => $products,
            'empty' => empty($products),
            'count' => count($products),
            'price' => $products->sum('price')
        ]);
    }

    public function getCartTotal($array = false)
    {
        $items = Cart::where('user_id', auth()->id())->get();

        $items->each(function ($item) {
            $item->price = Product::where('id', $item->product_id)->get()->pluck('price')->first();
        })->transform(function ($item) {
            return $item->price * $item->quantity;
        });

        $itemsSum = $items->sum();

        $total = $itemsSum - $this->couponAmountInRs($items->sum()) + $this->getShippingCost($itemsSum);

        if ($array) {
            return $response = [
                'success' => true,
                'subTotal' => $itemsSum,
                'discountReceived' => $this->couponAmountInRs($items->sum()),
                'shipping' => $this->getShippingCost($itemsSum),
                'total' => $total
            ];
        }

        return response()->json([
            'success' => true,
            'subTotal' => $itemsSum,
            'discountReceived' => $this->couponAmountInRs($items->sum()),
            'shipping' => $this->getShippingCost($itemsSum),
            'total' => $total
        ]);
    }

    protected function getShippingCost($sum)
    {
        return $sum >= 200 ? 0 : 20;
    }

    protected function couponAmountInRs($amount)
    {
        $discount = 0;

        if (session()->has('coupon')) {
            $discount = Coupon::whereName(session('couponCode'))->pluck('discount')->first();
        }

        return $discount / 100 * $amount;
    }

    public function updateQuantity()
    {
        $action = request('action');

        $currentItem = Cart::where(['user_id' => auth()->id(), 'product_id' => request('id')]);

        if (($currentItem->pluck('quantity')->first() == '1') && ($action == 'decrement')) {
            return response()->json([
                'success' => false,
                'quantity' => $currentItem->pluck('quantity')->first()
            ]);
        }

        $currentItem->$action('quantity');

        return response()->json([
            'success' => true,
            'quantity' => $currentItem->pluck('quantity')->first()
        ]);
    }

    public function delete()
    {
        Cart::where(['user_id' => auth()->id(), 'product_id' => request('product_id')])->delete();

        return response()->json([
            'success' => true,
        ]);
    }

    public static function shareCartTotal()
    {
        return (new static)->getCartTotal(true);
    }

    public static function shareCartItems()
    {
        return (new static)->getCartItems(true);
    }

    public static function deleteCartItems()
    {
        Cart::where(['user_id' => auth()->id()])->delete();
    }
}
