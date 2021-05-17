<?php

namespace App\Http\Livewire;

use App\Models\Shipping;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\NumberColumn;

class ShippingTable extends LivewireDatatable
{
    public $model = Shipping::class;
    public $exportable = true;

    public function columns()
    {
        return [
            Column::name('tracking_no')->filterable()->label('TRACKING NO'),
            Column::name('shipper_name')->filterable()->searchable(),
            Column::name('receiver_name')->filterable()->searchable(),
            Column::name('shipping_type')->filterable()->searchable(),
            Column::name('status')->filterable(),
            Column::callback(['shipper_name','id'], function ($phone,$id) {
                return view('shipments.action', ['id' => $id]);
            })->label('action')

        ];
    }
}
