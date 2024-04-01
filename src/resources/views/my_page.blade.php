@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
@endsection

@section('content')
<div class="my_page">
    <div class="user_information">
        <div class="user_image">
            <img src="" alt="">
            <div class="user_name">ユーザー名</div>
            <div class="profile_button">
                <button class="profile_change">
                    プロフィールを編集
                </button>
            </div>
        </div>
    </div>
    
</div>
@endsection