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

        return view('admin.products.index',compact('products'));
    }

    public function create()
    {
        $categories = Category::pluck('name','id');

        $subCategories = SubCategory::pluck('name','id');

        $variations = Variations::pluck('name','id');

        return view('admin.products.create',compact('categories','subCategories','variations'));
    }

    public function store(Request $request)
    {
        $request->merge(['slug' => str_slug($request->get('name'))]);

        $pid = Product::create($request->input())->id;

        $this->uploadToS3($request, $pid);

        return back()->with('success',true);
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

        Product::where('id',$pid)->update(['photo' => $imageFileName]);
    }
}
