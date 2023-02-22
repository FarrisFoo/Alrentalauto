<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function loginPage() 
    {
        return view('login.login');
    }

    public function authenticate(Request $request) 
    {
        
        $rules = [
            'email' => 'required|email',
            'password' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'error' => 'Please fill in all the required fields.',
            ]);
        }

        $credentials = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        $userData = User::where('email', $request->email)->first();

        if ($userData) {
            if(Auth::attempt($credentials)) {
                $request->session()->regenerate();

                Session::put('user_id', Auth::user()->id);
                $request->session()->put('username', Auth::user()->name);
                $request->session()->put('email', Auth::user()->email);

                return response()->json([
                    'status' => 1,
                    'route' => route('dashboard')
                ]);
            } else {
                return response()->json([
                    'status' => 0,
                ]);
            }
        } else {
            return response()->json([
                'status' => 'userNotFound',
            ]);
        }
    }
}
