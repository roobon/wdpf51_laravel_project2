<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchProduct extends Controller
{
    public function search(Request $req)
    {
        $term = $req->item;
        $result = DB::table('products')->where('product_name', 'like', "%$term%")->get();
        return $result;
    }
}
