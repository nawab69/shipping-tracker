<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return 'Shipment Index';
    }

    public function create()
    {
        return view('shipments.create');
    }

    public function store(Request $request)
    {
//        $request->validate([
//           // validation
//            //goes here
//        ]);

        // store shipment

        return ' stored';
    }

    public function edit($id)
    {
        return 'edit shipment page';
    }

    public function update(Request $request,$id)
    {
//        $request->validate([
//            // validation
//            //goes here
//        ]);

        // store shipment

        return ' updated';
    }

    public function delete(Request $request,$id)
    {
        return 'deleted';
    }
}
