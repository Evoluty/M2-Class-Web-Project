<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function render(Request $request)
    {
        $search = $request->input('search');
        $category = $request->input('category', 'All');
        $numberItems = DB::table('user_cart')
            ->where('user_id', '=', Auth::id())
            ->count();

        $categories = DB::table('categories')->get()->all();

        $allProducts = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('products.name', 'LIKE', "%$search%");

        if ($category !== 'All') {
            $allProducts = $allProducts->where('categories.name', '=', $category);
        }

        $allProducts = $allProducts->limit(20)->get(['products.*'])->all();

        return view('products.index', [
            'category' => 'Search',
            'cartNumberItems' => $numberItems,
            'categories' => $categories,
            'products' => $allProducts
        ]);
    }
}
