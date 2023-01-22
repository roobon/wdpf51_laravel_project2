<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view("auth/login");
    }

    public function login(Request $request)
    {

        $validation = $request->validate([
            'email' => 'required' | 'email',
            'password' => 'required',

        ]);
        return redirect('/dashboard');
    }
}
