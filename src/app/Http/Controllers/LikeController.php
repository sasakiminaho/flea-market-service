<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    // お気に入り追加機能
    public function like($id, Request $request) {
        $like = New Like();
        $like->user_id = Auth::user()->id;
        $like->item_id = $id;
        $like->save();
        return back();
    }

    // お気に入り削除機能
    public function unlike($id, Request $request) {
        $user = Auth::user()->id;
        $like = Like::where('user_id',$user)->where('item_id', $id)->first();
        $like->delete();
        return back();
    }

    // ログアウト状態のお気に入り登録ボタン押下
    public function noUser() {
        session()->flash('message', 'ログインをしてください');
        return back();
    }
}
