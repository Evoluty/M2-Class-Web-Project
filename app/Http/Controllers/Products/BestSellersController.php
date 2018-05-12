<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BestSellersController extends Controller
{
    public function addValueToItem($itemId, $count = 1)
    {
        $item = DB::table('best_products')->where('product_id', '=', $itemId);

        if (empty($item->first())) {
            DB::table('best_products')->insert([
                'product_id' => $itemId,
                'count' => $count
            ]);
        } else {
            $item->increment('count', $count);
        }

        return response(null, 200);
    }
}
