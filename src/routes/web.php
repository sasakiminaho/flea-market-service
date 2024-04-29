<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\LikeController;

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

// 会員登録機能
Route::post('register', [RegisterController::class, 'register']);

// ログイン画面の表示
Route::get('login', [LoginController::class,'showLogin']);

// ログイン機能
Route::post('login', [LoginController::class, 'login']);

// ログアウト機能
Route::group(['middleware' => ['auth']], function(){
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// トップページ表示
Route::get('/', [ItemController::class,'index']);

// 商品詳細ページ表示
Route::get('/item/{item_id}', [ItemController::class,'detail']);

// 購入ページ表示
Route::get('/purchase/{item_id}', [PurchaseController::class,'showPurchase']);

// 購入機能
Route::get('/purchase/{item_id}/done',[PurchaseController::class, 'purchase']);
Route::post('/purchase/{item_id}/done',[PurchaseController::class, 'purchase'])->name('purchase');

// 購入完了ページ表示
Route::get('/purchase_done', [PurchaseController::class,'purchaseDone']);

// 住所変更ページ表示
Route::get('/purchase/address/{item_id}', [PurchaseController::class,'showAddress']);

Route::post('/purchase/address/change/{item_id}',[PurchaseController::class, 'addressChange'])->name('address.change');

// コメントページ表示
Route::get('/comment/{item_id}', [ItemController::class,'showComment'])->name('comment');

// マイページ画面表示
Route::get('/my_page', [UserController::class,'my_page']);

// プロフィール編集画面表示
Route::get('/my_page/profile', [UserController::class,'showProfile']);

// プロフィール更新機能
Route::post('/my_page/profile', [UserController::class,'profileUpdate']);

// プロフィール更新完了ページ表示
Route::get('/profile_done', [UserController::class,'profileDone']);

// 出品ページ表示
Route::get('/sell', [SellController::class,'showSell']);

// 出品機能
Route::post('/sell', [SellController::class, 'sell']);

// 出品完了ページ表示
Route::get('/sell_done', [SellController::class,'sellDone']);

// お気に入り追加機能
Route::get('/item/{item_id}/like', [LikeController::class, 'like'])->name('like');

// お気に入り削除機能
Route::get('/item/{item_id}/unlike', [LikeController::class, 'unlike'])->name('unlike');

// ログアウト状態のお気に入り登録
Route::get('/item',[LikeController::class,'noUser'])->name('no.user');

// コメント追加機能
Route::post('/comment/{item_id}',[ItemController::class, 'comment']);

// コメント削除機能
Route::delete('/comment/delete/{comment_id}',[ItemController::class, 'commentDelete'])->name('comment.destroy');

// // 支払い方法選択ページ表示
// Route::get('/payment/{item_id}',[PurchaseController::class,'showPay'])->name('payment');

// 支払い方法変更機能
Route::post('/purchase/{item_id}', [PurchaseController::class, 'payChange'])->name('payment.change');