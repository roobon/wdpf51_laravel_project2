<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class AuthLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $email = $request->email;
        $pass = $request->password;
        $pass = sha1($pass);
        $user = new User;
        $data = $user->where('email',  $email);
        $data = $data->where('password', $pass)->get();

        if (!$data->count()) {
            return redirect("admin")->with('msg', "Check with correct login info");
        }
        return $next($request);
    }
}
