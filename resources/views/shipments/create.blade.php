<x-app-layout>
    <script>
        let packageCount = 0;
        const addPackage = (e) =>{
            e.preventDefault();
            packageCount++;

            const html_to_insert = `
                        <div class="lg:flex" id="package-${packageCount}">
                            <div class="my-2 mx-2">
                                <x-label for="qty-${packageCount}" :value="__('QTY')" />
                                <x-input id="qty-${packageCount}" class="block mt-1 w-full" type="number" name="qty[${packageCount}]" required autofocus />
                            </div>
                            <div class="my-2 mx-2">
                                <x-label for="type-${packageCount}" :value="__('Piece Type')" />
                                <select class='rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full mt-2' id="type-${packageCount}" name="type[${packageCount}]">
                                    <option value="Pallet">Pallet</option>
                                    <option value="Carton">Carton</option>
                                    <option value="Crate">Crate</option>
                                    <option value="Loose">Loose</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>

                            <div class="my-2 mx-2">
                                <x-label for="description-${packageCount}" :value="__('Description')" />
                                <x-input id="description-${packageCount}" class="block mt-1 w-full" type="text" name="description[${packageCount}]" required autofocus />
                            </div>
                            <div class="my-2 mx-2">
                                <x-label for="weight-${packageCount}" :value="__('Weight')" />
                                <x-input id="weight-${packageCount}" class="block mt-1 w-full" type="number" step="0.01" name="weight[${packageCount}]" required autofocus />
                            </div>
                        </div>
            `;

            document.getElementById('packages').insertAdjacentHTML('beforeend', html_to_insert);

            console.log('Add package',packageCount);
        }
    </script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Shipment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-form.open class="lg:flex lg:justify-between" method='post' :action="route('shipment.store')">


            <div class="w-full lg:w-3/4">
                <div class="flex">
                    <div class="p-6 my-6 mr-1 bg-white border-gray-200 w-1/2 overflow-hidden shadow-sm sm:rounded-lg">
                        Shipper Information
                        <div class="my-2">
                            <x-label for="shipper_name" :value="__('Shipper Name')" />

                            <x-input id="shipper_name" class="block mt-1 w-full" type="text" name="shipper_name" :value="old('shipper_name')" required autofocus />
                        </div>
                        <div class="my-2">
                            <x-label for="shipper_phone" :value="__('Phone Number')" />

                            <x-input id="shipper_phone" class="block mt-1 w-full" type="text" name="shipper_phone" :value="old('shipper_phone')" required autofocus />
                        </div>
                        <div class="my-2">
                            <x-label for="shipper_email" :value="__('Email')" />

                            <x-input id="shipper_email" class="block mt-1 w-full" type="text" name="shipper_email" :value="old('shipper_email')" required autofocus />
                        </div>
                        <div class="my-2">
                            <x-label for="shipper_address" :value="__('Address')" />

                            <x-input id="shipper_address" class="block mt-1 w-full" type="text" name="shipper_address" :value="old('shipper_address')" required autofocus />
                        </div>
                    </div>
                    <div class="my-6 ml-1 p-6 bg-white border-gray-200 w-1/2 overflow-hidden shadow-sm sm:rounded-lg">
                        Receiver Information
                        <div class="my-2">
                            <x-label for="receiver_name" :value="__('Receiver Name')" />

                            <x-input id="receiver_name" class="block mt-1 w-full" type="text" name="receiver_name" :value="old('receiver_name')" required autofocus />
                        </div>
                        <div class="my-2">
                            <x-label for="receiver_phone" :value="__('Phone Number')" />

                            <x-input id="receiver_phone" class="block mt-1 w-full" type="text" name="receiver_phone" :value="old('receiver_phone')" required autofocus />
                        </div>
                        <div class="my-2">
                            <x-label for="receiver_email" :value="__('Email')" />

                            <x-input id="receiver_email" class="block mt-1 w-full" type="text" name="receiver_email" :value="old('receiver_email')" required autofocus />
                        </div>
                        <div class="my-2">
                            <x-label for="receiver_address" :value="__('Address')" />

                            <x-input id="receiver_address" class="block mt-1 w-full" type="text" name="receiver_address" :value="old('receiver_address')" required autofocus />
                        </div>
                    </div>
                </div>

                <div class="p-6 bg-white border-gray-200 w-full overflow-hidden shadow-sm sm:rounded-lg">
                    Shipment Information
                    <div class="flex flex-wrap">
                        <div class="my-2 w-1/2 px-2">
                            <x-label for="shipping_type" :value="__('Type of Shipment')" />
                            <select class='rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full mt-2' id="shipping_type" name="shipping_type">
                                <option value="Air Freight">Air Freight</option>
                                <option value="International Shipping">International Shipping</option>
                                <option value="Truckload">Truckload</option>
                                <option value="Van Move">Van Move</option>
                            </select>
                        </div>
                        <div class="my-2 w-1/2 px-2">
                                <x-label for="courier" :value="__('Courier')" />
                                <x-input id="courier" class="block mt-1 w-full" type="text" name="courier" :value="old('courier')" required autofocus />
                        </div>
                        <div class="my-2 w-1/2 px-2">
                            <x-label for="shipping_mode" :value="__('Mode')" />
                            <select class='rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full mt-2' id="shipping_mode" name="shipping_mode">
                                <option value="Sea Transport">Sea Transport</option>
                                <option value="Land Shipping">Land Shipping</option>
                                <option value="Air Freight">Air Freight</option>
                            </select>
                        </div>
                        <div class="my-2 w-1/2 px-2">
                            <x-label for="payment_mode" :value="__('Payment Mode')" />
                            <select class='rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full mt-2' id="payment_mode" name="payment_mode">
                                <option value="CASH">CASH</option>
                                <option value="Cheque">Cheque</option>
                                <option value="BACS">BACS</option>
                            </select>
                        </div>
                        <div class="my-2 w-1/2 px-2">
                            <x-label for="total_freight" :value="__('Total Frieght')" />
                            <x-input id="total_freight" class="block mt-1 w-full" type="text" name="total_freight" :value="old('total_freight')" required autofocus />
                        </div>
                        <div class="my-2 w-1/2 px-2">
                            <x-label for="carrier" :value="__('Carrier')" />

                            <select class='rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full mt-2' id="carrier" name="carrier">
                                <option value="U-RICH">U-RICH</option>
                                <option value="USPS">USPS</option>
                                <option value="FedEx">FedEx</option>
                            </select>
                        </div>
                        <div class="my-2 w-1/2 px-2">
                            <x-label for="carrier_ref" :value="__('Carrier Reference No')" />
                            <x-input id="carrier_ref" class="block mt-1 w-full" type="text" name="carrier_ref" :value="old('carrier_ref')" required autofocus />
                        </div>
                        <div class="my-2 w-1/2 px-2">
                            <x-label for="departure_time" :value="__('Departure Time')" />
                            <x-input id="departure_time" class="block mt-1 w-full" type="time" name="departure_time" :value="old('departure_time')" required autofocus />
                        </div>
                        <div class="my-2 w-1/2 px-2">
                            <x-label for="origin" :value="__('Origin')" />
                            <x-input id="origin" class="block mt-1 w-full" type="text" name="origin" :value="old('origin')" required autofocus />
                        </div>
                        <div class="my-2 w-1/2 px-2">
                            <x-label for="destination" :value="__('Destination')" />
                            <x-input id="destination" class="block mt-1 w-full" type="text" name="destination" :value="old('destination')" required autofocus />
                        </div>
                        <div class="my-2 w-1/2 px-2">
                            <x-label for="pickup_date" :value="__('Pickup date')" />
                            <x-input id="pickup_date" class="block mt-1 w-full" type="date" name="pickup_date" :value="old('pickup_date')" required autofocus />
                        </div>
                        <div class="my-2 w-1/2 px-2">
                            <x-label for="pickup_time" :value="__('Pickup Time')" />
                            <x-input id="pickup_time" class="block mt-1 w-full" type="time" name="pickup_time" :value="old('pickup_time')" required autofocus />
                        </div>
                        <div class="my-2 w-1/2 px-2">
                            <x-label for="delivery_date" :value="__('Expected Delivery Date')" />
                            <x-input id="delivery_date" class="block mt-1 w-full" type="date" name="delivery_date" :value="old('delivery_date')" required autofocus />
                        </div>

                        <div class="my-2 w-1/2 px-2">
                            <x-label for="tracking_no" :value="__('Tracking No')" />
                            <x-input id="tracking_no" class="block mt-1 w-full" type="text" name="tracking_no" :value="old('tracking_no')" required autofocus />
                            @error('tracking_no')
                            <div class="text-red-600">
                                {{$message}}
                            </div>
                            @enderror
                        </div>

                        <div class="my-2 w-full px-2">
                            <x-label for="comments" :value="__('Comments')" />
                            <x-form.textarea class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full mt-2" name='comments'>{{ old('comments') }}</x-form.textarea>
                        </div>

                    </div>
                </div>

                <div  class="m-6 p-6 bg-white border-gray-200 w-full overflow-hidden shadow-sm sm:rounded-lg">
                    Packages
                    <div id="packages">
                        <div class="lg:flex" id="package-0">
                            <div class="my-2 mx-2">
                                <x-label for="qty-0" :value="__('QTY')" />
                                <x-input id="qty-0" class="block mt-1 w-full" type="number" name="qty[0]" required autofocus />
                            </div>
                            <div class="my-2 mx-2">
                                <x-label for="type" :value="__('Piece Type')" />
                                <select class='rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full mt-2' id="type-0" name="type[0]">
                                    <option value="Pallet">Pallet</option>
                                    <option value="Carton">Carton</option>
                                    <option value="Crate">Crate</option>
                                    <option value="Loose">Loose</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>

                            <div class="my-2 mx-2">
                                <x-label for="description-0" :value="__('Description')" />
                                <x-input id="description-0" class="block mt-1 w-full" type="text" name="description[0]" required autofocus />
                            </div>
                            <div class="my-2 mx-2">
                                <x-label for="weight-0" :value="__('Weight')" />
                                <x-input id="weight-0" class="block mt-1 w-full" type="number" step="0.01" name="weight[0]" required autofocus />
                            </div>
                        </div>
                    </div>

                    <x-button onClick="addPackage(event)">Add Package</x-button>



                </div>
            </div>
            <div class="w-full lg:w-1/4">
                <div class="m-6 p-6 bg-white border-gray-200 w-full overflow-hidden shadow-sm sm:rounded-lg">
                    History

                    <div class="my-2  px-2">
                        <x-label for="date" :value="__('Date')" />
                        <x-input id="date" class="block mt-1 w-full" type="date" name="date" :value="old('date')" required autofocus />
                    </div>
                    <div class="my-2 px-2">
                        <x-label for="time" :value="__('Time')" />
                        <x-input id="time" class="block mt-1 w-full" type="time" name="time" :value="old('time')" required autofocus />
                    </div>
                    <div class="my-2 px-2">
                        <x-label for="location" :value="__('Location')" />
                        <x-input id="location" class="block mt-1 w-full" type="text" name="location" :value="old('location')" required autofocus />
                    </div>
                    <div class="my-2 px-2">
                        <x-label for="status" :value="__('Status')" />

                        <select class='rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full mt-2' id="status" name="status">
                            <option value="Pending">Pending</option><option value="Picked up">Picked up</option><option value="On Hold">On Hold</option><option value="Out for delivery">Out for delivery</option><option value="In Transit">In Transit</option><option value="Enroute">Enroute</option><option value="Cancelled">Cancelled</option><option value="Delivered">Delivered</option><option value="Returned">Returned</option><option value="Order Complete">Order Complete</option><option value="Ready for Consolidation">Ready for Consolidation</option><option value="Consolidated">Consolidated</option>
                        </select>
                    </div>
                    <div class="my-2 px-2">
                        <x-label for="remarks" :value="__('Remarks')" />
                        <x-form.textarea class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full mt-2" name='remarks'>{{ old('remarks') }}</x-form.textarea>
                    </div>


                </div>

                <div class="flex justify-center">
                    <x-button type="submit" class="px-6 py-4 text-xl"> add shipment</x-button>
                </div>


            </div>
        </x-form.open>
        </div>
    </div>


</x-app-layout>
