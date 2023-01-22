<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showAge extends Controller
{
    public function index(Request $req)
    {
        echo "Welcome You're $req->age years Old";
    }
}
