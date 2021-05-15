<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function get_tracking_number()
    {
        return 'TR' . str_pad($this->id, 8, "0", STR_PAD_LEFT);
    }

    public function packages()
    {
        return $this->hasMany(Package::class);
    }

    public function shipstatuses()
    {
        return $this->hasMany(Shipstatus::class);
    }
}
