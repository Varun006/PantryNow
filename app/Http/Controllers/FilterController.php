<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FilterController extends Controller
{
    public function getAllProducts()
    {
        $products = Product::where('category', Category::whereSlug(request('categorySlug'))->pluck('id'))->get();

        $products = $this->addPhotoUrlAttribute($products);

        return response()->json([
            'products' => $products,
            'count' => count($products)
        ]);
    }

    public function filter()
    {
        $products = Product::where('subCategory', request()->get('id'))->get();

        $products = $this->addPhotoUrlAttribute($products);

        return response()->json([
            'products' => $products,
            'count' => count($products)
        ]);
    }

    /**
     * @param $products
     * @return mixed
     */
    protected function addPhotoUrlAttribute($products)
    {
        $products = $products->each(function ($p) {
            return $p->photo_url = Storage::disk('s3')->url('products/'.$p->photo);
        });

        return $products;
    }

    public function searchByKeyWord()
    {
        $products = DB::table('products')
            ->where('name', 'like', request('key'))
            ->get();

        $products = $this->addPhotoUrlAttribute($products);

        return response()->json([
           'products' => $products
        ]);
    }
}
