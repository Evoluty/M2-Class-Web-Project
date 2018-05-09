<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function render()
    {
        $orm_orders = DB::table('orders')
            ->where('user_id', '=', Auth::id())
            ->orderByDesc('created_at')
            ->get()->all();

        $orders = [];
        foreach ($orm_orders as $orm_order) {
            $lines = DB::table('order_lines')
                ->join('products', 'products.id', '=', 'order_lines.product_id')
                ->where('order_id', '=', $orm_order->id)
                ->get()->all();

            $products = [];
            foreach($lines as $line) {
                $products[] = [
                    'name' => $line->name,
                    'count' => (int)$line->count,
                    'url' => $line->picture_url
                ];
            }

            $orders[] = [
                'date' => new \DateTime($orm_order->created_at),
                'total' => (float)$orm_order->total_price,
                'products' => $products
            ];
        }

        $numberItems = DB::table('user_cart')->where('user_id', '=', Auth::id())->count();
        $categories = DB::table('categories')->get()->all();

        return view('orders.index', [
            'cartNumberItems' => $numberItems,
            'categories' => $categories,
            'orders' => $orders
        ]);
    }
}
