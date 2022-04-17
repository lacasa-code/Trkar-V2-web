<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audit_Log extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'discription',
        'model_type',
        'properties',
        'model_id',
    
    ];
}
