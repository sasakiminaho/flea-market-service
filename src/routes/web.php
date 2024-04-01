<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// 会員登録画面の表示
Route::get('register', [RegisterController::class,'showRegister']);

// ログイン画面の表示
Route::get('login', [LoginController::class,'showLogin']);

// トップページ表示
Route::get('/', [ItemController::class,'index']);

// 商品詳細ページ表示
Route::get('/item/item_id', [ItemController::class,'detail']);

// 購入ページ表示
Route::get('/purchase/item_id', [PurchaseController::class,'showPurchase']);

// 住所変更ページ表示
Route::get('/purchase/address/item_id', [PurchaseController::class,'showAddress']);

// コメントページ表示
Route::get('/comment', [ItemController::class,'showComment']);

// マイページ画面表示
Route::get('/my_page', [UserController::class,'my_page']);

// プロフィール編集画面表示
Route::get('/my_page/profile', [UserController::class,'showProfile']);

// 出品ページ表示
Route::get('/sell', [SellController::class,'showSell']);
