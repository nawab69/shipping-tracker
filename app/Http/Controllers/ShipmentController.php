<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Shipping;
use App\Models\Shipstatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ShipmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('shipments.index');
    }

    public function create()
    {
        return view('shipments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tracking_no' => 'string|unique:shippings'
        ]);
        try {
            $shipping = Shipping::create($request->except('qty','type','description','weight','date','time','location','remarks'));
            $lenght = collect($request->qty)->count();

            for($i=0 ; $i < $lenght ; $i++){
                Package::create([
                    'shipping_id' => $shipping->id,
                    'qty' => $request->qty[$i],
                    'weight' => $request->weight[$i],
                    'type'   => $request->type[$i],
                    'description' => $request->description[$i]
                ]);
            }

            if($request->has('status')){
                Shipstatus::create([
                    'shipping_id' => $shipping->id,
                    'date' => $request->date,
                    'time'  => $request->time,
                    'remarks' => $request->remarks,
                    'status'  => $request->status,
                    'location' => $request->location
                ]);
            }


            alert()->success('Added !','Shipment Added Successfully');
            return redirect()->route('shipment.index');

        }catch (\Exception $e){
            alert()->error('Error !','Something went wrong!');
            return redirect()->back();
        }




    }

    public function show($id)
    {
        $data = Shipping::with('packages')->find($id);
        return view('shipments.show',compact('data'));
    }

    public function download($id)
    {
        $data = Shipping::with('packages')->find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('pdf.shipment',compact('data'));
        return $pdf->download('invoice.pdf');

    }

    public function edit($id)
    {
        return 'edit shipment page';
    }

    public function receive()
    {
        return view('shipments.receive');
    }

    public function storeReceive(Request $request)
    {

        try {

            $shipping_id = (int) str_replace('TR','',$request->shipping_id);

            $shipping = Shipping::findOrFail($shipping_id);
            $shipping->update([
                'status' => $request->status
            ]);

            Shipstatus::create([
                'shipping_id' => $shipping_id,
                'date' => $request->date,
                'time' => $request->time,
                'remarks' => $request->remarks,
                'status' => $request->status,
                'location' => $request->location
            ]);
            alert()->success('updated !','Shipment Status updated Successfully');
            return redirect()->route('shipment.index');




        }catch(\Exception $e){
            alert()->error('Error !','Something went wrong!');
            return redirect()->back();
        }
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

    public function stats()
    {
        $s = Shipping::all();
        $stat;
        $stat['Pending'] = $s->where('status','Pending')->count();
        $stat['Picked Up'] = $s->where('status','Picked Up')->count();
        $stat['On Hold'] = $s->where('status','On Hold')->count();
        $stat['Out for delivery'] = $s->where('status','Out for delivery')->count();
        $stat['In Transit'] = $s->where('status','In Transit')->count();
        $stat['Enroute'] = $s->where('status','Enroute')->count();
        $stat['Cancelled'] = $s->where('status','Cancelled')->count();
        $stat['Delivered'] = $s->where('status','Delivered')->count();
        $stat['Returned'] = $s->where('status','Returned')->count();
        $stat['Order Complete'] = $s->where('status','Order Complete')->count();
        $stat['Ready for Consolidation'] = $s->where('status','Ready for Consolidation')->count();
        $stat['Consolidation'] = $s->where('status','Consolidation')->count();
        return view('dashboard',compact('stat'));
    }
}
