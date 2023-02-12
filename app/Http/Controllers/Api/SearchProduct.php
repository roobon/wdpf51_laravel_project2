<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchProduct extends Controller
{
    public function search(Request $req)
    {
        return $req->item;
    }
}
