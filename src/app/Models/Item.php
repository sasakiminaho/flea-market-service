<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'image',
        'price',
        'state',
        'explanation',
    ];

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }

    public function likes() {
        return $this->hasMany('App\Models\Like');
    }

    public function categories() {
        return $this->hasMany('App\Models\Category');
    }

    public function purchase() {
        return $this->hasOne('App\Models\Purchase');
    }
    
    public function user(){
        return $this->belongsTo('App\Models\User');
    }


}
