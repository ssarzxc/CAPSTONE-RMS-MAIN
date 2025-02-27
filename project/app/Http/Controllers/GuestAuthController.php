<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class GuestAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.guests.guest-login');
    }

    public function showRegisterForm()
    {
        return view('auth.guests.guest-register');
    }

    public function register(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255', // Optional
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:guests,email',
            'password' => 'required|min:6',
        ]);

        // Create the guest user
        $guest = Guest::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Encrypt password
        ]);

        // Log in the guest user
        Auth::guard('guest')->login($guest);

        // Redirect to guest dashboard
        return redirect()->route('guest.dashboard')->with('success', 'Registration successful!');
    }

    public function login(Request $request)
    {
        // Validate only email and password
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt login using only email and password
        if (Auth::guard('guest')->attempt($credentials)) {
            $request->session()->regenerate(); // Prevents session fixation attacks
            return redirect()->route('guest.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout()
    {
        Auth::guard('guest')->logout();
        return redirect()->route('guest.login');
    }
}
