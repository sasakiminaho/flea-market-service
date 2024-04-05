<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // 会員登録ページ表示
    public function showRegister() {
        return view('register');
    }

    // 会員登録機能
    public function register(RegisterRequest $request) {
        $register = User::create([
            "email" => $request->input("email"),
            "password" => Hash::make($request->input("password")),
        ]);

        return view('login');
    }
}
