<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    public function index() {
        return view('login');
    }

    public function authenticate(Request $request) {
        $validatedAccount = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($validatedAccount)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin-osis');
        }

        return back()->with('is-errors', 'Login GAGAL');

    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
