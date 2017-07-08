<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        $subCategories = SubCategory::all();

        return view('admin.SubCategory.index',compact('subCategories'));
    }

    public function create()
    {
        $subCategories = SubCategory::all();

        return view('admin.SubCategory.create',compact('subCategories'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:sub_categories'
        ]);

        SubCategory::create($request->input());

        return back()->with('success','true');
    }

    public function edit(SubCategory $subCategory)
    {
        return view('admin.SubCategory.edit',compact('subCategory'));
    }

    public function update(Request $request, SubCategory $subCategory)
    {
        $this->validate($request, [
            'name' => 'required'
        ]);

        $subCategory->update(['name' => $request->get('name')]);

        return back()->with('success',true);
    }
}
