<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ShippingAddressRequest;
use App\Http\Requests\PurchaseRequest;
use App\Models\Item;
use App\Models\Purchase;
use App\Models\ShippingAddress;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    // 購入ページ表示
    public function showPurchase($id) {
        $item_detail = Item::find($id);
        return view('purchase',compact('item_detail'));
    }

    // 購入機能
    public function purchase($id,PurchaseRequest $request) {

        $purchase = Purchase::create([
            "user_id" => Auth::user()->id,
            "item_id" => $request->item_id,
            "shipping_address_id" => $request->shipping_address_id,
        ]);

        $item_detail = Item::where('id',$request->item_id)->first();


        // \Stripe\Stripe::setApiKey(config('stripe.stripe_secret_key'));

        // try {
        //     \Stripe\Charge::create([
        //         'source' => $request->stripeToken,
        //         'amount' => $item_detail->price,
        //         'currency' => 'jpy',
        //     ]);
        // } catch (Exception $e) {
        //     return back()->with('flash_alert', '決済に失敗しました！('. $e->getMessage() . ')');
        // }
        // return back()->with('status', '決済が完了しました！');

        return view('purchase_done');
    }

    // 購入完了ページ表示
    public function purchaseDone() {
        return view('purchase_done');
    }

    // 住所変更ページ表示
    public function showAddress($id) {
        $item_detail = Item::find($id);
        return view('address', compact('item_detail'));
    }

    // 住所変更登録機能
    public function addressChange($id, ShippingAddressRequest $request) {
        $address = ShippingAddress::create([
            "user_id" => Auth::user()->id,
            "post_code" => $request->post_code,
            "address" => $request->address,
            "building" => $request->building,
        ]);
        $item_detail = Item::find($id);


        return view('/purchase', compact('address','item_detail'));
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
        return view('purchase', compact('payment', 'item_detail'));
    }
}
