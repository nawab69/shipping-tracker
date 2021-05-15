<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" overflow-hidden shadow-sm sm:rounded-lg">
                <div class=" border-b border-gray-200">
                    <div id="wrapper" class="mx-auto">
                        <div class="sm:grid sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
                            @foreach($stat as $key => $value)
                            <div class="flex flex-col justify-center px-4 py-4 bg-white border border-gray-300 rounded">
                                <div>
                                    <p class="text-3xl font-semibold text-center text-gray-800">{{$value}}</p>
                                    <p class="text-lg text-center text-gray-500">{{$key}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
