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
        $row = DB::table('user_cart')
            ->where('user_id', '=', Auth::id())
            ->where('product_id', '=', $itemId);

        if ($row->doesntExist()) {
            DB::table('user_cart')->insert([
                'user_id' => Auth::id(),
                'product_id' => $itemId,
                'count' => 1
            ]);
        } else {
            $row->increment('count');
        }

        return redirect('/cart');
    }

    public function deleteItem($itemId)
    {
        DB::table('user_cart')
            ->where('user_id', '=', Auth::id())
            ->where('product_id', '=', $itemId)
            ->delete();

        return redirect('/cart');
    }

    public function empty()
    {
        DB::table('user_cart')
            ->where('user_id', '=', Auth::id())
            ->delete();

        return redirect('/cart');
    }
}
