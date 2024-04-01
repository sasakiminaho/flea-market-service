<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    // 購入ページ表示
    public function showPurchase() {
        return view('purchase');
    }

    // 住所変更ページ表示
    public function showAddress() {
        return view('address');
    }
}
