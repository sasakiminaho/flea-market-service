<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class ItemController extends Controller
{
    // トップページ表示
    public function index() {
        $items = Item::all();
        return view('index',compact('items'));
    }

    // 商品詳細ページ表示
    public function detail($id) {
        $item_detail = Item::find($id);
        $category = Category::where('item_id',$id)->first();
        return view('detail',compact('item_detail','category'));
    }

    // コメントページ表示
    public function showComment() {
        return view('comment');
    }
}
