<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Shipment') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-form.open class="lg:flex lg:justify-between" method='post' :action="route('receive.store')">
            <div class="w-full">
                <div class="m-6 p-6 bg-white border-gray-200 w-full overflow-hidden shadow-sm sm:rounded-lg">
                    Receive
                    <div class="my-2  px-2">
                        <x-label for="shipping_id" :value="__('Shipping ID')" />
                        <x-input id="shipping_id" class="block mt-1 w-full" type="text" name="shipping_id" :value="old('shipping_id')" required autofocus />
                    </div>

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
                    <x-button type="submit" class="px-6 py-4 text-xl">Update Status</x-button>
                </div>


            </div>
        </x-form.open>
        </div>
    </div>


</x-app-layout>
