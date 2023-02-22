<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsNotAuthenticated
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
        if (!Auth::check()) {
            return $this->clearAndLogout($request);
        } else {
            $userData = User::where('id', Auth::user()->id)
                ->first();

            return $next($request);
        }
    }

    private function clearAndLogout($request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect(route('login-page'));
    }
}
