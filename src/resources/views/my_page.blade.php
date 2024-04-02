@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
@endsection

@section('content')
<div class="my_page">
    <div class="user_information">
        <div class="user_image">
            <img src="" alt="" class="image">
            <div class="user_name">ユーザー名</div>
        </div>
        <div class="profile_button">
            <button class="profile_change">
                プロフィールを編集
            </button>
        </div>
    </div>
    <div class="container">
    <input type="radio" name="radio" id="tab1" checked>
    <input type="radio" name="radio" id="tab2">
    <div class="tabs">
        <label for="tab1" class="tab1">出品した商品</label>
        <label for="tab2" class="tab2">購入した商品</label>
    </div>
    <div class="contents">
        <div class="content1">
            出品した商品が表示されます。
        </div>
        <div class="content2">
            購入した商品が表示されます。
        </div>
    </div>
</div>
</div>
@endsection