<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VendorStaff extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'email',
        'password',
        'username',
        'phone',
        'uuid',
        'vendor_id',
        'status',
        'create_by',
        
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' =>  'datetime',
    ];
}
