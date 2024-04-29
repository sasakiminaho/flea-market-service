@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
<div class="purchase">
    <div class="purchase_edit">
        <div class="item-information">
            <div class="item-image">
                <img src="{{ asset('storage/' .$item_detail->image) }}" alt="" width="150px" height="150px" class="image">
            </div>
            <div class="item_detail">
                <p class="item_name">{{ $item_detail->name }}</p>
                <p class="item_price">¥{{ $item_detail->price}}</p>
            </div>
        </div>
        <form action="{{ route('payment.change',['item_id' => $item_detail->id]) }}" method="post">
            @csrf
            <div class="payment_change">
                <div class="payment_title">支払い方法</div>
                <div class="payment_select">
                    <select name="payment" id="payment" class="select-box">
                        <option value="1" selected>コンビニ支払い</option>
                        <option value="2">クレジットカード</option>
                        <option value="3">銀行振込</option>
                    </select>
                </div>
                <div class="pay_contents">
                    <button type="submit" class="payment-change_button">変更する</button>
                </div>
            </div>
        </form>
        <div class="address_change">
            <div class="address_title">配送先</div>
            <div class="address_contents">
                <a href="/purchase/address/{{$item_detail->id}}" class="change-button">変更する</a>
            </div>
        </div>
    </div>
    <div class="purchase_confirm">
        <div class="purchase-contents_confirm">
            <div class="item_purchase_title">
                <div class="commodity-price">商品代金</div>
                <div class="payment-amount">支払い金額</div>
                <div class="payment_method">支払い方法</div>
            </div>
            <div class="item_purchase_contents">
                <div class="commodity-price">¥{{ $item_detail->price}}</div>
                <div class="payment-amount">¥{{ $item_detail->price}}</div>
                <div class="payment_method">{{ $payment->payment ?? '' }}</div>
            </div>
        </div>
            @error('item_id')
            <div class="error">{{ $message }}</div>
            @enderror

            @error('shipping_address_id')
            <div class="error">{{ $message }}</div>
            @enderror
        <form action="/purchase/{item_id}/done" method="post">
            @csrf
            <input type="hidden" name="item_id" value="{{$item_detail->id}}">
            <input type="hidden" name="shipping_address_id" value="{{ old('shipping_address_id', $address ->id ?? '')}}">
            <div class="purchase_decision">
                <button type="submit" class="purchase_decision_button">購入する</button>
            </div>
        </form>
    </div>
</div>
@endsection