<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Show the customer sign-up form.
     */
    public function showSignupForm()
    {
        return view('signupcustomer');
    }

    /**
     * Handle customer registration.
     */
    public function register(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create the customer user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'customer', // Set role as 'customer'
        ]);

        // Redirect to the sign-in page with a success message
        return redirect()->route('signin')->with('success', 'Customer account created! Please sign in.');
    }
}
