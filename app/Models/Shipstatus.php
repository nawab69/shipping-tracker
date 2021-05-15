<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipstatus extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function shipping()
    {
        return $this->belongsTo(Shipping::class);
    }
}
