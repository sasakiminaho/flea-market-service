@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/address.css') }}">
@endsection

@section('content')
<div class="address_change">
    <div class="address_change_page">
        <h2 class="title">
            住所の変更
        </h2>
        <form action="{{ route('address.change',['item_id' => $item_detail->id]) }}" method="post">
        @csrf
            <div class="post-code">
                <div class="post-code_title">郵便番号</div>
                @error('post_code')
                <div class="error">{{ $message }}</div>
                @enderror
                <input type="text" name="post_code" class="post-code_input" pattern="\d{3}-?\d{4}">
            </div>
            <div class="address">
                <div class="address_title">住所</div>
                @error('address')
                <div class="error">{{ $message }}</div>
                @enderror
                <input type="text" name="address" class="address_input">
            </div>
            <div class="building">
                <div class="building_title">建物名</div>
                <input type="text" name="building" class="building_input">
            </div>
            <div class="update_button">
                <button type="submit" class="address_update">更新する</button>
            </div>
        </form>
    </div>
</div>
@endsection