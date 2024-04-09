@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile_done.css') }}">
@endsection

@section('content')
<div class="profile_done">
    <div class="profile_done_alert">
        プロフィールを変更しました。
    </div>
    <div class="my_page_button">
        <a href="/my_page" class="my_page">マイページに戻る</a>
    </div>
</div>
@endsection