<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCategory;
use App\Variations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        list($categories, $subCategories, $variations) = $this->basicDetails();

        return view('admin.products.create', compact('categories', 'subCategories', 'variations'));
    }

    public function edit(Product $product)
    {
        list($categories, $subCategories, $variations) = $this->basicDetails();

        $url = Storage::disk('s3')->url('products/' . $product->photo);

        return view('admin.products.edit', compact('product', 'categories', 'subCategories', 'variations', 'url'));
    }

    public function update(Product $product, Request $request)
    {
        $product->update($request->except('_method', '_token'));

        if ($request->hasFile('photo')) {
            $this->uploadToS3($request, $product->id);
        }

        return back()->with('success', true);
    }

    public function store(Request $request)
    {
        $this->validation($request);

        $request->merge(['slug' => str_slug($request->get('name'))]);

        $pid = Product::create($request->input())->id;

        $this->uploadToS3($request, $pid);

        return back()->with('success', true);
    }

    public function destroy(Product $product)
    {
        if ($product->exists()) {
            Product::destroy(request('id'));
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false
            ]);
        }
    }

    /**
     * @param Request $request
     * @param  $pid
     */
    protected function uploadToS3(Request $request, $pid)
    {
        $image = $request->file('photo');

        $imageFileName = time() . '.' . $image->getClientOriginalExtension();

        $s3 = Storage::disk('s3');

        $filePath = '/products/' . $imageFileName;

        $s3->put($filePath, file_get_contents($image), 'public');

        Product::where('id', $pid)->update(['photo' => $imageFileName]);
    }

    /**
     * @param Request $request
     */
    protected function validation(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'category' => 'required',
            'subCategory' => 'required',
            'price' => 'required',
            'description' => 'required',
            'photo' => 'required|image'
        ]);
    }

    /**
     * @return array
     */
    protected function basicDetails()
    {
        $categories = Category::pluck('name', 'id');

        $subCategories = SubCategory::pluck('name', 'id');

        $variations = Variations::pluck('name', 'id');

        $variations->prepend('None');

        return array($categories, $subCategories, $variations);
    }
}
