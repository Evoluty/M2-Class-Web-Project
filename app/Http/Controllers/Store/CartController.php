<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
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
            ->where('user_id', '=', Auth::id())
            ->get()->all();

        $suggestions = DB::table('products')
            ->whereNotIn('id',
                DB::table('user_cart')
                    ->where('user_id', '=', Auth::id())
                    ->pluck('product_id')->all()
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

        session([
            $itemId => $row->get(['count'])->first()->count
        ]);

        return response([
            'count' => DB::table('user_cart')->where('user_id', '=', Auth::id())->count()
        ],200);
    }

    public function updateItem($itemId, $number)
    {
        DB::table('user_cart')
            ->where('user_id', '=', Auth::id())
            ->where('product_id', '=', $itemId)
            ->update(['count' => $number]);

        session([
            $itemId => $number
        ]);

        return response(null, 204);
    }

    public function deleteItem($itemId)
    {
        DB::table('user_cart')
            ->where('user_id', '=', Auth::id())
            ->where('product_id', '=', $itemId)
            ->delete();

        session()->forget($itemId);

        return redirect('/cart');
    }

    public function empty()
    {
        DB::table('user_cart')
            ->where('user_id', '=', Auth::id())
            ->delete();

        $all_sessions = session()->all();
        foreach(array_keys($all_sessions) as $key) {
            if (is_numeric($key)) {
                session()->forget($key);
            }
        }

        return redirect('/cart');
    }
}
