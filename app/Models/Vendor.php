<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Authenticatable implements JWTSubject
{
    use  HasFactory, SoftDeletes;
    protected $guard = 'vendor';
    protected $fillable = [
        'email',
        'password',
        'username',
        'phone',
        'image',
        'country_id',
        'city_id',
        'area_id',
        'address',
        'longitude',
        'latitude',
        'bank_account',
        'commercial_number',
        'tax_card_number',
        'notes',
        'approved',
        'last_login',
        'in_block',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' =>  'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }
}
