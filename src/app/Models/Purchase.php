<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'item_id',
        'payment_id',
        'shipping_address_id',
    ];

    public function shipping_address() {
        return $this->hasOne('App\Models\ShippingAddress');
    }

    public function payment() {
        return $this->hasOne('App\Models\Payment');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function item(){
        return $this->belongsTo('App\Models\Item');
    }
}

