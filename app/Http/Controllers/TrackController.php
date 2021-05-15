<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function track(Request $request)
    {
        $shipping_id = (int) str_replace('TR','',$request->shipping_id);
        $data =  Shipping::findOrFail($shipping_id);
        return view('shipments.show',compact('data'));

    }
}
