<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WishlistController; // コントローラーを追加

//ホーム画面
Route::get("/", function () {
    return view("wishlists.home");
}) -> name("wishlists.home");

//一覧表示
Route::get("/list", [WishlistController::class, "list"]) -> name("wishlists.list");

//データ追加画面
Route::get("/add", [WishlistController::class, "add"]) -> name("wishlists.add");

//データの保存（フォーム送信時に実行）
Route::post("/wishlists", [WishlistController::class, "post"]) -> name("wishlists.post");

//データ削除
Route::delete("/delete/{id}", [WishlistController::class, "delete"]) -> name("wishlists.delete");