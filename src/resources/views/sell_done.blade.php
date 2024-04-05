@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell_done.css') }}">
@endsection

@section('content')
<div class="sell_done">
    <div class="sell_done_alert">
        出品が完了しました。
    </div>
    <div class="my_page_button">
        <a href="/my_page" class="my_page">マイページに戻る</a>
    </div>
</div>
@endsection