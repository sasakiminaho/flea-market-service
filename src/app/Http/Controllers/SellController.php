<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SellRequest;
use App\Http\Requests\CategoryRequest;
use App\Models\ItemImage;

class SellController extends Controller
{
    //出品ページ表示
    public function showSell() {
        return view('sell');
    }

    // 商品画像をアップロード
    public function upload(Request $request) {

        $file_name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/' , $file_name);

        $image = ItemImage::create([
            "image" => $file_name,
        ]);

        return view('sell')->with('image', $image);
    }

    // 出品機能
    public function sell() {

    }
}
