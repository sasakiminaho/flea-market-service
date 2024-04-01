@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/comment.css') }}">
@endsection

@section('content')
<div class="detail">
    <div class="item-detail_page">
        <div class="item-image">
            <img src="" alt="商品画像">
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
        </div>
    </div>
</div>
@endsection