<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StoreVendorStaff extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'vendor_stuff_id',
        'store_id',

    ];
}
