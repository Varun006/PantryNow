<?php

namespace App\Http\Controllers;

use App\Posted;
use Illuminate\Http\Request;

class PostedController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
//            'name' => 'required',
            'email' => 'required|email'
        ]);

        Posted::create($request->input());

        return back()->with('success',true);
    }
}
