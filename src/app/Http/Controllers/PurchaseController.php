<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Payment;

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

    // 支払い方法変更ページ表示
    public function showPay($id) {
        $item_detail = Item::find($id);
        return view('payment', compact('item_detail'));
    }

    // 支払い方法変更機能
    public function payChange($id, Request $request) {
        $payment = Payment::where('id',$request->payment)->first();
        $item_detail = Item::find($id);
        return view('/purchase', compact('payment', 'item_detail'));
    }
}
