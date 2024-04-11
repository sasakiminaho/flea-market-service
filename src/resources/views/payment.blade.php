@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/payment.css') }}">
@endsection

@section('content')
<div class="payment_page">
    <form action="{{ route('payment.change',['item_id' => $item_detail->id]) }}" method="post">
        @csrf
        <div class="payment_title">
            お支払い方法を選択してください。
        </div>
        <div class="payment_select">
            <select name="payment" id="payment" class="select-box">
                <option value="1" selected>コンビニ支払い</option>
                <option value="2">クレジットカード</option>
                <option value="3">銀行振込</option>
            </select>
        </div>
        <div class="change_button">
            <button type="submit" class="change_submit_button">変更する</button>
        </div>
    </form>
</div>
@endsection