@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
    <input type="radio" name="radio" id="tab1" checked>
    <input type="radio" name="radio" id="tab2">
    <div class="tabs">
        <label for="tab1" class="tab1">おすすめ</label>
        <label for="tab2" class="tab2">マイリスト</label>
    </div>
    <div class="contents">
        <div class="content1">
            @foreach($items as $item)
            <a href="/item/{{{ $item->id }}}">
            <img src="{{ asset('storage/' .$item->image) }}" alt="" width="20%" height="40%"></a>
            @endforeach
        </div>
        <div class="content2">
            お気に入り登録した商品が表示されます。
        </div>
    </div>
</div>
@endsection