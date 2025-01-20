<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    /**
     * Display the sign-in form.
     */
    public function showSigninForm()
    {
        return view('signin'); // Ensure 'signin.blade.php' exists in 'resources/views'
    }

    /**
     * Handle login logic.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $role = Auth::user()->role;

            if ($role === 'admin') {
                return redirect()->route('signin');
            } elseif ($role === 'customer') {
                return redirect()->route('signin');
            }
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    /**
     * Handle logout.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('signin');
    }
}