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

        return view('home.index', [
            'cartNumberItems' => $numberItems,
            'categories' => $categories,
            'products' => $allProducts
        ]);
    }
}
