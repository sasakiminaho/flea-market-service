<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    // トップページ表示
    public function index() {
        return view('index');
    }

    // 商品詳細ページ表示
    public function detail() {
        return view('detail');
    }

    // コメントページ表示
    public function showComment() {
        return view('comment');
    }
}
