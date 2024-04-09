<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class PurchaseController extends Controller
{
    // 購入ページ表示
    public function showPurchase($id) {
        $item_detail = Item::find($id);
        return view('purchase',compact('item_detail'));
    }

    // 住所変更ページ表示
    public function showAddress() {
        return view('address');
    }
}
