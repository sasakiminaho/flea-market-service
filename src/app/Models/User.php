<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'name',
        'post_code',
        'address',
        'building',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function items() {
        return $this->hasMany('App\Models\Item');
    }

    public function likes() {
        return $this->hasMany('App\Models\Like');
    }

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }

    public function purchases() {
        return $this->hasMany('App\Models\Purchase');
    }

    public function shipping_addresses() {
        return $this->hasMany('App\Models\ShippingAddress');
    }

    public function userImage() {
        return $this->hasOne('App\Models\UserImage');
    }

}
