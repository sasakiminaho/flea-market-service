<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Item;
use App\Models\Category;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;


class ItemController extends Controller
{
    // トップページ表示
    public function index() {
        if(Auth::check()) {
        $items = Item::all();
        $likes = Like::where('user_id', \Auth::user()->id)->with('item:id,name,brand,image,price,state,explanation')->get();
        return view('index',compact('items','likes'));
        }else {
            $items = Item::all();
            return view('index',compact('items'));
        }
    }

    // 商品詳細ページ表示
    public function detail($id) {
        if(Auth::check()) {
            $item_detail = Item::find($id);
            $category = Category::where('item_id',$id)->first();
            $likes = Like::where('user_id',auth::user()->id, 'item_id')->get();
            return view('detail', compact('item_detail','category','likes'));
        }else {
            $item_detail = Item::find($id);
            $category = Category::where('item_id',$id)->first();
            return view('detail', compact('item_detail','category'));
        }
    }

    // コメントページ表示
    public function showComment($id) {
        $comments = Comment::where('item_id',$id)->with('user:id,name,image')->get();;
        if(Auth::check()) {
            $item_detail = Item::find($id);
            $likes = Like::where('user_id',auth::user()->id, 'item_id')->get();
            return view('comment', compact('item_detail','likes','comments'));
        }else {
            $item_detail = Item::find($id);
            return view('comment', compact('item_detail','comments'));
        }
    }

    // コメント追加機能
    public function comment(CommentRequest $request) {
        $comments = Comment::create([
            "user_id" => Auth::user()->id,
            "item_id" => $request->id,
            "comment" => $request->comment,
        ]);
        return back();
    }

    // コメント削除機能
    public function commentDelete($comment_id) {
        $comment = Comment::where('id', $comment_id)->first();
        $comment->delete();
        return back();
    }

    // 検索結果ページ表示
    public function searchResults() {
        return view('search_results');
    }

    // 検索機能
    public function search(Request $request) {
        $keyword = $request->keyword;
        $search_items = Category::where('category', 'LIKE', "%{$keyword}%")->with('item')->get();

        return view('search_results',compact('search_items'));
    }
}
