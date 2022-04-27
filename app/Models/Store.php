<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Laratrust\Traits\LaratrustUserTrait;
class Store extends Model
{
    use HasApiTokens, HasFactory, Notifiable,SoftDeletes,LaratrustUserTrait;

    protected $fillable = [
        'email',
        'phone',
        'image',
        'address',
        'longitude',
        'latitude',
        'banner',
        'name_ar',
        'name_en',
        'vendor_id',
        'uuid',
        'store_type_id',
        'description_ar',
        'description_en',
        'status',

    ];


    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' =>  'datetime',
    ];
}
