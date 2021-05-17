<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    public function track(Request $request)
    {

        $data =  Shipping::where('tracking_no',$request->shipping_id)->firstOrFail();
        return view('shipments.show',compact('data'));
    }
}
