<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketPriority extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name_ar',
        'name_en',
        'color'
    ];
}
