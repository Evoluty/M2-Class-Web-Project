<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function render()
    {
        $numberItems = DB::table('user_cart')
            ->where('user_id', '=', Auth::id())
            ->count();

        $categories = DB::table('categories')->get()->all();

        $cartProducts = DB::table('products')
            ->join('user_cart', 'products.id', '=', 'user_cart.product_id')
            ->get()->all();

        $suggestions = DB::table('products')
            ->whereNotIn('id',
                DB::table('user_cart')->where('user_id', '=', Auth::id())->pluck('product_id')->all()
            )->limit(4)
            ->get()->all();

        return view('cart.index', [
            'cartNumberItems' => $numberItems,
            'categories' => $categories,
            'cartProducts' => $cartProducts,
            'products' => $suggestions
        ]);
    }

    public function addItem($itemId)
    {
        DB::table('user_cart')->insert([
            'user_id' => Auth::id(),
            'product_id' => $itemId
        ]);
    }

    public function deleteItem($itemId)
    {
        DB::table('user_cart')
            ->where('user_id', '=', Auth::id())
            ->where('product_id', '=', $itemId)
            ->first()
            ->delete();

        redirect('/cart');
    }

    public function empty()
    {
        DB::table('user_cart')
            ->where('user_id', '=', Auth::id())
            ->delete();
    }
}
