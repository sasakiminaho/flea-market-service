<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //マイページ画面表示
    public function my_page() {
        $sell_items = Item::where('user_id', \Auth::user()->id)->get();
        $profile = Auth::user()->image;

        return view('my_page', compact('sell_items', 'profile'));
    }

    // プロフィール編集画面表示
    public function showProfile() {
        return view('profile');
    }

    // プローフィール更新機能
    public function profileUpdate(Request $request) {
        if (isset($request->image)){
        $file_name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/' , $file_name);
        }

        $profile = User::find($request->id)->update([
            "name" => $request->input("name"),
            "image" => $file_name ?? '',
            "post_code" => $request->input("post_code")?? '',
            "address" => $request->input("address") ?? '',
            "building" => $request->input("building") ?? '',
        ]);

        return view("profile_done");

    }

    // プロフィール更新完了ページ
    public function profileDone() {
        return view("profile_done");
    }
}
