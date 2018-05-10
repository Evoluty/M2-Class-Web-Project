<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function render($category)
    {
        $categoryOrm = DB::table('categories')->where('name', '=', $category)->get(['id'])->first();
        if (empty($categoryOrm)) {
            abort(404);
        }
        $categoryId = $categoryOrm->id;

        $numberItems = DB::table('user_cart')
            ->where('user_id', '=', Auth::id())
            ->count();

        $categories = DB::table('categories')->get()->all();

        $allProducts = DB::table('products')
            ->where('category_id', '=', $categoryId)
            ->limit(20)->get()->all();

        return view('products.index', [
            'category' => ucfirst($category),
            'cartNumberItems' => $numberItems,
            'categories' => $categories,
            'products' => $allProducts
        ]);
    }
}
