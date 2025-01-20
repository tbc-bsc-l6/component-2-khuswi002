<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Show the admin sign-up form.
     */
    public function showSignupForm()
    {
        return view('signupadmin');
    }

    /**
     * Handle admin registration.
     */
    public function signupAdmin(Request $request)
{
    $validated = $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'email' => 'required|email|unique:admins,email',
        'password' => 'required|min:6',
    ]);

    Admin::create([
        'first_name' => $validated['firstname'],
        'last_name' => $validated['lastname'],
        'email' => $validated['email'],
        'password' => Hash::make($validated['password']),
    ]);

    return redirect()->route('signin')->with('success', 'Admin account created successfully.');
}
}
