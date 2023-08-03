<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        // validasi ketat
        // $credentials = $request->validate([
        //     'email' => 'required|email:dns',
        //     'password' => 'required'
        // ]);

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // dd('log');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // return redirect()->intended('/dashboard');
            return redirect()->intended('/dashboard');
        }
        // dd('log');

        // if(Auth::attempt(['email' => $email, 'password' => $password]))
        // return back()->withErrors('loginError','Login Failed');
        return back()->with('loginError', 'Login Failed');
    }

    public function logout()
    {

        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }
}
