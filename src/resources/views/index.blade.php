@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
@if(Auth::check())
<div class="container">
    <input type="radio" name="radio" id="tab1" class="radio" checked>
    <input type="radio" name="radio" id="tab2" class="radio">
    <div class="tabs">
        <label for="tab1" class="tab1">おすすめ</label>
        <label for="tab2" class="tab2">マイリスト</label>
    </div>
    <div class="contents">
        <div class="content1">
            @foreach($items as $item)
            <a href="/item/{{{ $item->id }}}">
            <img src="{{ asset('storage/' .$item->image) }}" alt="" width="18%" height="40%"></a>
            @endforeach
        </div>
        <div class="content2">
            @foreach($likes ?? '' as $like)
            <a href="/item/{{{ $like->item->id }}}">
            <img src="{{ asset('storage/' . $like->item->image) }}" alt="" width="20%" height="40%">
            @endforeach
        </div>
    </div>
</div>
@else
<div class="container">
    <input type="radio" name="radio" id="tab1" class="radio" checked>
    <input type="radio" name="radio" id="tab2" class="radio">
    <div class="tabs">
        <label for="tab1" class="tab1">おすすめ</label>
        <label for="tab2" class="tab2">マイリスト</label>
    </div>
    <div class="contents">
        <div class="content1">
            @foreach($items as $item)
            <a href="/item/{{{ $item->id }}}">
            <img src="{{ asset('storage/' .$item->image) }}" alt="" width="18%" height="40%"></a>
            @endforeach
        </div>
        <div class="content2">
            <p>会員登録、またはログインをするとお気に入りした商品が表示されます。</p>
        </div>
    </div>
</div>
@endif
@endsection