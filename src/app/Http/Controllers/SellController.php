<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SellRequest;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class SellController extends Controller
{
    //出品ページ表示
    public function showSell() {
        return view('sell');
    }

    // 出品機能
    public function sell(SellRequest $request) {
        $file_name = $request->file('image')->getClientOriginalName();

        $request->file('image')->storeAs('public/' , $file_name);

        $item = Item::create([
            "user_id" => Auth::user()->id,
            "name" => $request->input("name"),
            "brand" => $request->input("brand"),
            "image" => $file_name,
            "price" => $request->input("price"),
            "state" => $request->input("state"),
            "explanation" => $request->input("explanation")
        ]);

        $category = Category::create([
            "item_id" => $item->id,
            "category" => $request->input("category")
        ]);

        return view('/sell_done');
    }

    // 出品完了ページ表示
    public function sellDone(){
        return view('sell_done');
    }

}
