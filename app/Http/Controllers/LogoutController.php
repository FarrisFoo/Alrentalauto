<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request)
    {
        /**
         * Clear the current auth & session.
         * This will redirect to login page.
         */
        Auth::logout();
        $request->session()->flush();
        return redirect(route('login-page'));
    }
}
