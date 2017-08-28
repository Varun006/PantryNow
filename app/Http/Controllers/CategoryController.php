<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Debug\Tests\Fixtures\ClassAlias;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:categories'
        ]);

        Category::create($request->input());

        return back()->with('success','true');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $category->update(['name' => $request->get('name') , 'slug' => str_slug($request->get('name'))]);

        return back()->with('success',true);
    }

    public function destroy(Category $category)
    {
        if ($category->exists()) {
            Category::destroy(request('id'));
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false
            ]);
        }
    }

    public function showProducts($slug)
    {
        $category = Category::whereSlug($slug)->first();

        $products = Product::where('category',$category->id)->get();

        $products->each(function($product) {
            $product->photo = Storage::disk('s3')->url('products/'.$product->photo);
            $product->subCategory = SubCategory::where('id', $product->subCategory)->pluck('name')->first();
        });

        $subCategory = $products->map(function($product) {
            return collect(collect($product)->unique('subCategory')->all())->map(function($id){
                $product = Product::find($id);
                return SubCategory::find($product->subCategory);
            });
        });

        return view('categories',compact('products','category','subCategory'));
    }
}
