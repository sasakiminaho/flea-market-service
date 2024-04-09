<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    // トップページ表示
    public function index() {
        $items = Item::all();
        $likes = Like::where('user_id', \Auth::user()->id)->with('item:id,name,brand,image,price,state,explanation')->get();
        return view('index',compact('items','likes'));
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
    public function showComment() {
        return view('comment');
    }
}
