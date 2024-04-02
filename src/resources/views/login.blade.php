@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login">
    <div class="login-page">
        <div class="login-title">ログイン</div>
        <div class="email">メールアドレス</div>
        <div class="email-form">
            <input type="email" class="form" value="{{ old('email') }}">
        </div>
        <div class="password">パスワード</div>
        <div class="password-form">
            <input type="password" class="form" value="{{ old('password') }}">
        </div>
        <div class="login-button">
            <button type="submit" class="login-button_submit">ログインする
            </button>
        </div>
        <div class="register">
            <a href="" class="register-button">ログインはこちら</a>
        </div>
    </div>
</div>
@endsection