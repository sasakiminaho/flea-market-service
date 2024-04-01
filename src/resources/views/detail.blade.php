@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<div class="detail">
    <div class="item-detail_page">
        <div class="item-image">
            <img src="" alt="商品画像" class="image">
        </div>
        <div class="item-detail">
            <div class="item-name">
                商品名
            </div>
            <div class="item-brand-name">
                ブランド名
            </div>
            <div class="item-price">
                ¥47,000(値段)
            </div>
            <div class="button">
                <div class="like_button">⭐︎</div>
                <div class="comment-page">💬</div>
            </div>
            <div class="purchase_button">
                <button class="purchase">購入する</button>
            </div>
            <div class="item_description">
                <div class="description_title">商品説明</div>
                <div class="item-color">カラー：グレー</div>
                <div class="description_text">新品。商品の状態は良好です。傷もありません。購入後、即発送いたします。</div>
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
                    <div class="status_contents">良好</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection