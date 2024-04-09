@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register">
    <div class="register-page">
        <div class="register-title">会員登録</div>
            <form action="/register" method="post">
            @csrf
                <div class="email">メールアドレス</div>
                <div class="email-form">
                    <input type="email" name="email" class="form" value="{{ old('email') }}">
                </div>
                @error('email')
                <div class="error">
                    {{ $message }}
                </div>
                @enderror
                <div class="password">パスワード</div>
                <div class="password-form">
                    <input type="password" name="password" class="form" value="{{ old('password') }}">
                </div>
                @error('password')
                <div class="error">
                    {{ $message }}
                </div>
                @enderror
                <div class="register-button">
                    <button type="submit" class="register-button_submit">登録する
                    </button>
                </div>
            </form>
            <div class="login">
                <a href="/login" class="login-button">ログインはこちら</a>
            </div>
    </div>
</div>
@endsection