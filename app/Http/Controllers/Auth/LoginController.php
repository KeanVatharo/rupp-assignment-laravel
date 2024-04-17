<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'name' => ['required', 'email'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::create([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => $credentials['password'],
        ]);

        if (!$user) {
            throw new Exception('User is null!');
        }

        // Authenticate the user
        Auth::attempt($credentials);
        $request->session()->regenerate();

        return redirect()->route('homepage');
    }
}
