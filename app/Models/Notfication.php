<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notfication extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'notifiable_id',
        'notifiable_model',
        'data',
        'read_at',

    ];
}
