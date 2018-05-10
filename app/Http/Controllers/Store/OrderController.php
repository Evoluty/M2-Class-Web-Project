<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function newOrder()
    {
        $cartProducts = DB::table('products')
            ->join('user_cart', 'products.id', '=', 'user_cart.product_id')
            ->where('user_id', '=', Auth::id())
            ->get(['product_id', 'count', 'price'])
            ->all();

        $order_id = DB::table('orders')->insertGetId([
            'user_id' => Auth::id(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $total = 0;
        foreach($cartProducts as $product) {
            $total += $product->price * $product->count;

            DB::table('order_lines')->insert([
                'order_id' => $order_id,
                'product_id' => $product->product_id,
                'count' => $product->count
            ]);
        }

        DB::table('orders')
            ->where('id', '=', $order_id)
            ->update(['total_price' => $total]);

        DB::table('user_cart')
            ->where('user_id', '=', Auth::id())
            ->delete();

        return redirect('/my-account');
    }
}
