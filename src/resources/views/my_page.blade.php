@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
@endsection

@section('content')
<div class="my_page_information">
    <div class="user_information">
        <div class="user_image">
            <img src="{{ asset('storage/' .$profile) }}" alt="" class="image">
            <div class="user_name">{{ Auth::user()->name }}</div>
        </div>
        <div class="profile_button">
            <a href="/my_page/profile">
                <button class="profile_change">
                プロフィールを編集
                </button>
            </a>
        </div>
    </div>
    <div class="container">
    <input type="radio" name="radio" id="tab1" class="radio" checked>
    <input type="radio" name="radio" id="tab2" class="radio">
    <div class="tabs">
        <label for="tab1" class="tab1">出品した商品
        </label>
        <label for="tab2" class="tab2">購入した商品</label>
    </div>
    <div class="contents">
        <div class="content1">
            @foreach($sell_items as $sell_item)
            <a href="/item/{{{ $sell_item->id }}}">
            <img src="{{ asset('storage/' .$sell_item->image) }}" alt="" width="20%" height="40%"></a>
            @endforeach
        </div>
        <div class="content2">
            @foreach($purchase_items as $purchase_item)
            <a href="/item/{{{ $purchase_item->item->id }}}">
            <img src="{{ asset('storage/' .$purchase_item->item->image) }}" alt="" width="20%" height="40%"></a>
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection