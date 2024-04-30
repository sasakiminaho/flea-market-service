@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/search_results.css') }}">
@endsection

@section('content')
    <div class="content1">
        @foreach($search_items as $search_item)
            <a href="/item/{{{ $search_item->item->id }}}">
            <img src="{{ asset('storage/' .$search_item->item->image) }}" alt="" width="18%" height="40%"></a>
        @endforeach
    </div>
@endsection