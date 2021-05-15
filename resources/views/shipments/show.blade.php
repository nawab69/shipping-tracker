<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shipment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 my-6 mr-1 bg-white border-gray-200 w-full overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-center">
                    @php
                    $data_id = 'TR' . str_pad($data->id, 8, "0", STR_PAD_LEFT)
                    @endphp
                    {!!  DNS1D::getBarcodeSvg($data_id, 'c39',1,50); !!}
                </div>
                <hr class="mt-2">
                <div class="flex justify-between">
                    <div>
                        <b class="mb-5">SHIPPER INFORMATION</b>
                        <p class="mt-5">Shipper Name : {{$data->shipper_name}}</p>

                        <p>Phone Number : {{$data->shipper_phone}}</p>

                        <p>Address : {{$data->shipper_address}}</p>

                        <p>Email : {{$data->shipper_email}}</p>
                    </div>
                    <div>
                        <b class="mb-5">RECEIVER INFORMATION</b>
                        <p class="mt-5">Shipper Name : {{$data->receiver_name}}</p>

                        <p>Phone Number : {{$data->receiver_phone}}</p>

                        <p>Address : {{$data->receiver_address}}</p>

                        <p>Email : {{$data->receiver_email}}</p>
                    </div>

                </div>
                <div>
                    <button class="bg-gray-500 text-white font-semibold block w-full focus:outline-none py-2 mt-2">Status: {{$data->status}}</button>
                </div>
                <div class="mt-4">
                    <b>SHIPMENT INFORMATION</b>
                    <hr>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="mt-2">
                            <b>Type of Shipment :</b>
                            <p>{{$data->shipping_type}}</p>
                        </div>
                        <div class="mt-2">
                            <b>Courier :</b>
                            <p>{{$data->courier}}</p>
                        </div>
                        <div class="mt-2">
                            <b>Shipping Mode :</b>
                            <p>{{$data->shipping_mode}}</p>
                        </div>
                        <div class="mt-2">
                            <b>Payment Mode :</b>
                            <p>{{$data->payment_mode}}</p>
                        </div>
                        <div class="mt-2">
                            <b>Total freight :</b>
                            <p>{{$data->total_freight}}</p>
                        </div>
                        <div class="mt-2">
                            <b>Carrier :</b>
                            <p>{{$data->carrier}}</p>
                        </div>
                        <div class="mt-2">
                            <b>Carrier Ref No :</b>
                            <p>{{$data->carrier_ref}}</p>
                        </div>

                        <div class="mt-2">
                            <b>Departure Time: :</b>
                            <p>{{$data->departure_time}}</p>
                        </div>
                        <div class="mt-2">
                            <b>Origin :</b>
                            <p>{{$data->origin}}</p>
                        </div>
                        <div class="mt-2">
                            <b>Destination :</b>
                            <p>{{$data->destination}}</p>
                        </div>
                        <div class="mt-2">
                            <b>Pickup date :</b>
                            <p>{{$data->pickup_date}}</p>
                        </div>
                        <div class="mt-2">
                            <b>Pickup time :</b>
                            <p>{{$data->pickup_time}}</p>
                        </div>
                        <div class="mt-2">
                            <b>Expected Delivery Dates :</b>
                            <p>{{$data->delivery_date}}</p>
                        </div>
                        <div class="mt-2">
                            <b>Comments :</b>
                            <p>{{$data->comments}}</p>
                        </div>

                    </div>
                </div>

                <div class="mt-12">
                    <div>
                        <b>SHIPMENT HISTORY</b>
                        <hr>
                    </div>

                    <div class="mt-2">
                        <table class="table-fixed w-full">
                            <thead class="bg-gray-500 py-5 text-white">
                            <tr>
                                <th class="w-1/6 py-5">Date</th>
                                <th class="w-1/6 py-5">Time</th>
                                <th class="w-2/6 py-5">Location</th>
                                <th class="w-1/6 py-5">Status</th>
                                <th class="w-1/6 py-5">remarks</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data->shipstatuses as $stat)
                            <tr>
                                <td class="text-center">{{$stat->date}}</td>
                                <td class="text-center">{{$stat->time}}</td>
                                <td class="text-center">{{$stat->location}}</td>
                                <td class="text-center">{{$stat->status}}</td>
                                <td class="text-center">{{$stat->remarks}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="mt-12">
                    <div>
                        <b>PACKAGES</b>
                        <hr>
                    </div>

                    <div class="mt-2">
                        <table class="table-fixed w-full">
                            <thead class="bg-gray-500 py-5 text-white">
                            <tr>
                                <th class="w-1/6 py-5">QTY.</th>
                                <th class="w-1/6 py-5">PIECE TYPE</th>
                                <th class="w-3/6 py-5">DESCRIPTION</th>
                                <th class="w-1/6 py-5">WEIGHT (k.g)</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data->packages as $pkg)
                            <tr>
                                <td class="text-center">{{$pkg->qty}}</td>
                                <td class="text-center">{{$pkg->type}}</td>
                                <td class="text-center">{{$pkg->description}}</td>
                                <td class="text-center">{{$pkg->weight}}</td>

                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
