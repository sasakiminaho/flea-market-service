@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/purchase_done.css') }}">
@endsection

@section('content')
<div class="purchase_done">
    <div class="purchase_done_alert">
        購入しました。
    </div>
    <div class="my_page_button">
        <a href="/my_page" class="my_page">マイページに戻る</a>
    </div>
</div>
@endsection