<?php

namespace App\Http\Controllers;

use App\Variations;
use Illuminate\Http\Request;

class VariationsController extends Controller
{
    public function index()
    {
        $variations = Variations::all();

        return view('admin.variations.index', compact('variations'));
    }

    public function create()
    {
        return view('admin.variations.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'v1' => 'required'
        ]);

        Variations::create($request->input());

        return back()->with('success',true);
    }

    public function edit(Variations $variation)
    {
        return view('admin.variations.edit',compact('variation'));
    }

    public function update(Request $request, Variations $variation)
    {
        $this->validate($request,[
            'name' => 'required',
            'v1' => 'required'
        ]);

        $variation->update($request->input());

        return back()->with('success',true);
    }
}
