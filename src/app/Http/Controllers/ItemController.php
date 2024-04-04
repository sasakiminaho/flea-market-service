<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    // トップページ表示
    public function index() {
        return view('index');
    }

    // 商品詳細ページ表示
    public function detail($id) {
        $item_detail = Item::find($id);
        return view('detail',compact('item_detail'));
    }

    // コメントページ表示
    public function showComment() {
        return view('comment');
    }
}
