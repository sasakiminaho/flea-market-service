<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // 会員登録ページ表示
    public function showRegister() {
        return view('register');
    }
}
