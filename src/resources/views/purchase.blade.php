@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase.css') }}">
@endsection

@section('content')
<div class="purchase">
    <div class="purchase_edit">
        <div class="item-information">
            <div class="item-image">
                <img src="{{ asset('storage/' .$item_detail->image) }}" alt="" width="120px" height="150px" class="image">
            </div>
            <div class="item_detail">
                <p class="item_name">{{ $item_detail->name }}</p>
                <p class="item_price">¥{{ $item_detail->price}}</p>
            </div>
        </div>
        <div class="payment_change">
            <div class="payment_title">支払い方法</div>
            <div class="pay_contents">
                <a href="/payment/{{$item_detail->id}}" class="change-button">変更する</a>
            </div>
        </div>
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
        <form action="{{ route('purchase') }}" method="post"></form>
        <div class="purchase_decision">
            <button class="purchase_decision_button">購入する</button>
        </div>
    </div>
</div>
@endsection