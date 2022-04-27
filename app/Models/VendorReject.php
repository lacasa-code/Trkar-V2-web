<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VendorReject extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'vendor_id',
        'reject_status_id',

    ];
}
