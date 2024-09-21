<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use DB;

class RequestControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $email = $request->email;
        $password = $request->pass;

        $UserExist = DB::table('users')->where('email', $email)->where('password', $password)->exists();

        if ($UserExist) {
            return $next($request);
        } else {
            return redirect()->route('homepage')->withErrors(['error' => 'Invalid credentials']);
        }
    }
}
