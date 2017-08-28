<?php

namespace App\Http\Controllers;

use App\ShippingAddress;
use App\User;
use Illuminate\Http\Request;

class ShippingAddressController extends Controller
{
    public function show()
    {
        if (str_contains(session('_previous')['url'], 'checkout')) {
            session(['redirect' => '/checkout']);
        }

        $address = ShippingAddress::where('user_id', auth()->id())->first();

        return view('shipping', compact('address'));
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'building_details' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'street' => 'required',
            'name' => 'required'
        ]);

        User::where('id', auth()->id())->update(['name' => $request->get('name')]);

        ShippingAddress::where('user_id', auth()->id())->update(request()->only('building_details', 'landmark', 'city', 'phone', 'street', 'zip'));

        if (session()->has('redirect')) {
            return redirect(session()->get('redirect'))->with('success',true);
        }
        return back()->with('success', true);
    }
}
