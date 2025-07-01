<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
 public function handle(Request $request, Closure $next): Response
{
    if (auth()->check()) {
        if (auth()->user()->role->name !== "admin") {
            auth()->logout();

            return redirect()->route('filament.admin.auth.login')
                ->withErrors(['email' => 'You are not authorized to access the admin panel.']);
        }
    }

    return $next($request);
}

}
