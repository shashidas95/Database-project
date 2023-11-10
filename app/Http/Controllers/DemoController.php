<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    function DemoAction()
    {
        $result = DB::table('products')
            ->join('categories', function (JoinClause $join) {
                $join->on('products.category_id', '=', 'categories.id')
                    ->where('products.price', '>', 2000);
            })->join('brands', function(JoinClause $join){
                $join->on('products.brand_id', '=', 'brands.id')->where('brands.brandName', '=', 'Easy');
            })
            ->get();;


        return $result;
    }
}
