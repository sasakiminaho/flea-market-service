@extends('layouts.app2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sell.css') }}">
@endsection

@section('content')
<div class="sell_page">
    <div class="sell_input_page">
        <div class="sell_page_title">
            商品の出品
        </div>
        <div class="form_error" >
            @error('image')
            {{ $message }}
            @enderror
        </div>
        <div class="form_error" >
            @error('name')
            {{ $message }}
            @enderror
        </div>
        <div class="form_error" >
            @error('category')
            {{ $message }}
            @enderror
        </div>
        <div class="form_error" >
            @error('state')
            {{ $message }}
            @enderror
        </div>
        <div class="form_error" >
            @error('explanation')
            {{ $message }}
            @enderror
        </div>
        <div class="form_error" >
            @error('price')
            {{ $message }}
            @enderror
        </div>
        <form action="/sell" method="post" enctype="multipart/form-data">
            @csrf
            <div class="item_image">
                <div class="item_image_title">商品画像</div>
                <div class="image_area">
                    <input type="file" name="image">
                    <button class="item_image_select-button">画像を選択する</button>
                </div>
            </div>
            <div class="item_detail">
                <h3 class="item_detail_title">商品の詳細</h3>
                <div class="item_category">
                    <div class="item_category_title">カテゴリー</div>
                    <input type="text" class="item_category_input" name="category">
                </div>
                <div class="item_states">
                    <div class="item_states_title">商品の状態</div>
                    <input type="text" class="item_states_input" name="state">
                </div>
            </div>
            <div class="item_overview">
                <h3 class="item_overview_title">商品名と説明</h3>
                <div class="item_name">
                    <div class="item_name_title">商品名</div>
                    <input type="text" class="item_name_input" name="name">
                </div>
                <div class="brand_name">
                    <div class="brand_name_title">ブランド名</div>
                    <input type="text" class="brand_name_input" name="brand">
                </div>
                <div class="item_explanation">
                    <div class="item_explanation_title">商品の説明</div>
                    <textarea name="explanation" id="explanation" cols="30" rows="5" class="item_explanation_textarea"></textarea>
                </div>
            </div>
            <div class="price">
                <div class="item_price_detail">
                    <h3 class="item_price_title">販売価格</h3>
                    <div class="item_price">販売価格</div>
                    <input type="text" class="item_price_input" name="price">
                </div>
            </div>
            <div class="sell">
                <button type="submit" class="sell_button">出品する</button>
            </div>
        </form>
    </div>
</div>
@endsection