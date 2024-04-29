@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/comment.css') }}">
@endsection

@section('content')
@if(Auth::check())
<div class="detail">
    <div class="item-detail_page">
        <div class="item-image">
            <img src="{{ asset('storage/' .$item_detail->image) }} " alt="商品画像" class="image">
        </div>
        <div class="item-detail">
            <div class="item-name">
                {{ $item_detail->name }}
            </div>
            <div class="item-brand-name">
                {{ $item_detail->brand }}
            </div>
            <div class="item-price">
                ¥{{ $item_detail->price }}(値段)
            </div>
            <div class="button">

                @php
                $like_flag = false;
                @endphp

                @foreach($likes as $like)

                @if($like['item_id']===$item_detail['id'])

                @php
                $like_flag = true
                @endphp

                @break

                @else

                @php
                $like_flag = false;
                @endphp

                @endif

                @endforeach


                @if($like_flag)
                <a href="{{ route('unlike',$item_detail) }}" class="like-button"><img src="{{ asset('img/like.svg') }}" alt="" width="25px" height="25px"></a>
                @else
                <a href="{{ route('like',$item_detail) }}" class="like-button"><img src="{{ asset('img/unlike.svg') }}" alt="" width="25px" height="25px"></a>
                @endif
                <a href="/comment/{{{$item_detail->id}}}" class="comment-page" style="text-decoration:none;"><img src="{{ asset('img/comment.svg') }}" alt="" width="25px" height="25px"></a>
            </div>
                <div class="comment_area">

            @foreach($comments as $comment)
                <div class="user_information">
                    <img src="{{ asset('storage/' . $comment->user->image) }}" alt="" width="20%" height="40%" class="user_image">
                    <div class="user_name">{{ $comment->user->name }}</div>
                </div>
                <form action="{{ route('comment.destroy', ['comment_id' => $comment->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="comments">
                        <div class="comment-list">{{ $comment['comment'] }}</div>
                        <button type="submit" class="comment_delete-button">削除</button>
                    </div>
                </form>
            @endforeach

            </div>

            <form action="/comment/{ {{ $item_detail->id }} }" method="post">
                @csrf

                @error('comment')
                <div class="error">{{ $message }}</div>
                @enderror

                <div class="comment">
                    <textarea name="comment" id="comment" class="comment_input" cols="30" rows="5"></textarea>
                </div>
                <input type="hidden" name="id" value="{{ $item_detail->id }}">
                <div class="comment_button">
                    <button class="comment_button_submit">コメントを送信する</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@else
<div class="detail">
    @if(session('message'))
	<div class="session_message">
		{{ session('message') }}
	</div>
    @endif
    <div class="item-detail_page">
        <div class="item-image">
            <img src="{{ asset('storage/' .$item_detail->image) }} " alt="商品画像" class="image">
        </div>
        <div class="item-detail">
            <div class="item-name">
                {{ $item_detail->name }}
            </div>
            <div class="item-brand-name">
                {{ $item_detail->brand }}
            </div>
            <div class="item-price">
                ¥{{ $item_detail->price }}(値段)
            </div>
            <div class="button">
                <a href="{{ route('no.user') }}" class="like-button"><img src="{{ asset('img/unlike.svg') }}" alt="" width="25px" height="25px">
                <a href="/comment/{{{$item_detail->id}}}" class="comment-page" style="text-decoration:none;"><img src="{{ asset('img/comment.svg') }}" alt="" width="25px" height="25px"></a>
            </div>
                <div class="comment_area">

            @foreach($comments as $comment)
                <div class="user_information">
                    <img src="{{ asset('storage/' . $comment->user->image) }}" alt="" width="20%" height="40%" class="user_image">
                    <div class="user_name">{{ $comment->user->name }}</div>
                </div>
                <form action="{{ route('comment.destroy', ['comment_id' => $comment->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="comments">
                        <div class="comment-list">{{ $comment['comment'] }}</div>
                        <button type="submit" class="comment_delete-button">削除</button>
                    </div>
                </form>
            @endforeach

            </div>

            <form action="{{ route('no.user') }}" method="get">
                @csrf

                @error('comment')
                <div class="error">{{ $message }}</div>
                @enderror

                <div class="comment">
                    <textarea name="comment" id="comment" class="comment_input" cols="30" rows="5"></textarea>
                </div>
                <input type="hidden" name="id" value="{{ $item_detail->id }}">
                <div class="comment_button">
                    <button class="comment_button_submit">コメントを送信する</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endif
@endsection