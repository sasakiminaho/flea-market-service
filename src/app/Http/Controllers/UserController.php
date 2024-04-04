<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class UserController extends Controller
{
    //マイページ画面表示
    public function my_page() {
        $sell_items = Item::where('user_id', \Auth::user()->id)->get();
        return view('my_page', compact('sell_items'));
    }

    // プロフィール編集画面表示
    public function showProfile() {
        return view('profile');
    }
}
