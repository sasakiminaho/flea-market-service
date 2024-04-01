<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellController extends Controller
{
    //出品ページ表示
    public function showSell() {
        return view('sell');
    }
}
