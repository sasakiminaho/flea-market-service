@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<div class="profile_page">
    <div class="profile_change">
        <div class="profile_change_title">
            プロフィール設定
        </div>
        <div class="profile_image">
            <img src="" alt="" class="image">
            <div class="change_button">
                <button class="image_select">画像を選択する</button>
            </div>
        </div>
        <div class="user-name">
            <div class="user-name_title">ユーザー名</div>
            <input type="text" class="user-name_input">
        </div>
        <div class="post-code">
            <div class="post-code_title">郵便番号</div>
            <input type="text" class="post-code_input">
        </div>
        <div class="address">
            <div class="address_title">住所</div>
            <input type="text" class="address_input">
        </div>
        <div class="building-name">
            <div class="building-name_title">建物名</div>
            <input type="text" class="building-name_input">
        </div>
        <div class="update">
            <button class="update_button">更新する</button>
        </div>
    </div>
</div>
@endsection