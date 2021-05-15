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
            Column::callback(['id'],function ($id){
                return 'TR' . str_pad($id, 8, "0", STR_PAD_LEFT);
            })->filterable()->label('ID'),
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
