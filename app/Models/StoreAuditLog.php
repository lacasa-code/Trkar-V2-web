<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreAuditLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'discription',
        'model_type',
        'properties',
        'model_id',
        'store_id',
    
    ];
}
