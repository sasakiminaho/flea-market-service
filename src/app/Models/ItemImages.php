<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemImages extends Model
{
    use HasFactory;

    protected $fillable = [
        'image'
    ];

    public function item()  {
        return $this->hasOne('App\Models\Item');
    }
}
