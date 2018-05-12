<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function render()
    {
        $numberItems = DB::table('user_cart')
            ->where('user_id', '=', Auth::id())
            ->count();

        $categories = DB::table('categories')->get()->all();

        $allProducts = DB::table('products')->limit(20)->get()->all();

        $suggested = DB::table('products')
            ->join('best_products', 'products.id', '=', 'best_products.product_id', 'LEFT')
            ->orderByDesc('best_products.count')->orderBy('id')
            ->limit(4)->get(['products.*', 'count'])->all();

        return view('home.index', [
            'cartNumberItems' => $numberItems,
            'categories' => $categories,
            'suggested' => $suggested,
            'products' => $allProducts
        ]);
    }
}
