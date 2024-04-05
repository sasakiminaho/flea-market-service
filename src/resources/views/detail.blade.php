@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="detail">
    <div class="item-detail_page">
        <div class="item-image">
            <img src="{{ asset('storage/' .$item_detail->image) }} " alt="商品画像" class="image">
        </div>
        <div class="item-detail">
            <div class="item-name">
                {{ $item_detail->name }}
            </div>
            <div class="item-brand-name">
                {{ $item_detail->brand }}
            </div>
            <div class="item-price">
                ¥{{ $item_detail->price }}
            </div>
            <div class="button">
                <div class="like_button">⭐︎</div>
                <a href="/comment/{item_id}" class="comment-page" style="text-decoration:none;">💬</a>
            </div>
            <div class="purchase_button">
                <a href="/purchase/{{{$item_detail->id}}}"><button class="purchase">購入する</button></a>
            </div>
            <div class="item_description">
                <div class="description_title">商品説明
                <div class="description_text">{{ $item_detail->explanation }}</div>
            </div>
            <div class="item_information">
                <div class="item_information_title">商品の情報</div>
                <div class="item_category">
                    <div class="category_title">カテゴリー</div>
                    <div class="category_contents">洋服</div>
                    <div class="category_contents">メンズ</div>
                </div>
                <div class="item_status">
                    <div class="status_title">商品の状態</div>
                    <div class="status_contents">{{ $item_detail->state }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection