@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register">
    <div class="register-page">
        <div class="register-title">会員登録</div>
        <div class="email">メールアドレス</div>
        <div class="email-form">
            <input type="email" class="form" value="{{ old('email') }}">
        </div>
        <div class="password">パスワード</div>
        <div class="password-form">
            <input type="password" class="form" value="{{ old('password') }}">
        </div>
        <div class="register-button">
            <button type="submit" class="register-button_submit">登録する
            </button>
        </div>
        <div class="login">
            <a href="" class="login-button">ログインはこちら</a>
        </div>
    </div>
</div>
@endsection