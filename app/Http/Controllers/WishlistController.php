<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    //一覧表示
    public function list(){
        $wishlists = Wishlist::orderBy('priority', 'desc') -> orderBy('created_at', 'desc') -> get(); // ほしい度が高い順、同じほしい度の場合は新しい順
        return view("wishlists.list", compact("wishlists"));
    }

    //追加ページ表示
    public function add(){
        return view("wishlists.add");
    }

    //データ登録処理
    public function post(Request $request){
        $request -> validate([
            "name" => "required|string|max:255",
            "priority" => "required|integer|in:1,2,3,4,5",
            "url" => "required|url",
        ]);

        Wishlist::create($request -> all());

        return redirect()->route("wishlists.list")->with("success", "ほしいものを追加しました");
    }

    //削除処理
    public function delete($id){
        Wishlist::findOrFail($id) -> delete();
        return redirect() -> route("wishlists.list")->with("success", "ほしいものを削除しました");
    }
}
