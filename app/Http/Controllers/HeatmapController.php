<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HeatmapController extends Controller
{
    public function newPosition($x, $y)
    {
        $item = DB::table('heatmap')
            ->where('x', '=', $x)
            ->where('y', '=', $y);

        if (empty($item->first())) {
            DB::table('heatmap')->insert([
                'x' => $x,
                'y' => $y,
                'count' => 1
            ]);
        } else {
            $item->increment('count');
        }

        return response(null, 200);
    }
}
