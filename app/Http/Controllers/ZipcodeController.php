<?php

namespace App\Http\Controllers;

use App\ShippingAddress;
use App\zipcode;
use Illuminate\Http\Request;

class ZipcodeController extends Controller
{
    public function check()
    {
        $zip = ShippingAddress::where('user_id',auth()->id())->value('zip');

        $exist = zipcode::where('zip',$zip)->exists();

        return response()->json([
           'exist' => $exist
        ]);
    }

    public function checkZipFromInput()
    {
        $zip = request()->get('zip');

        $exist = zipcode::where('zip',$zip)->exists();

        return response()->json([
            'exist' => $exist
        ]);
    }
}
