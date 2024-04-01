<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //マイページ画面表示
    public function my_page() {
        return view('my_page');
    }

    // プロフィール編集画面表示
    public function showProfile() {
        return view('profile');
    }
}
