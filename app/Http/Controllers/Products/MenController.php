<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MenController extends Controller
{
    public function render()
    {
        $numberItems = DB::table('user_cart')
            ->where('user_id', '=', Auth::id())
            ->count();

        $categories = DB::table('categories')->get()->all();

        $allProducts = DB::table('products')
            ->where('category_id', '=', 2)
            ->limit(20)->get()->all();

        return view('products.index', [
            'category' => 'Men',
            'cartNumberItems' => $numberItems,
            'categories' => $categories,
            'products' => $allProducts
        ]);
    }
}
