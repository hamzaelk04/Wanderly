<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister()
    {
        $previous = url()->previous();

        if (!str_contains($previous, route('register'))) {
            session(['url.intended' => $previous]);
        }

        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required|string|max:20',
            'lastname' => 'required|string|max:20',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $roleName = $request->has('organizer') ? 'organizer' : 'client';
        $roleId = Role::where('name', $roleName)->first();

        $user = User::create([
            'firstname' => $validated['firstname'],
            'lastname' => $validated['lastname'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role_id' => $roleId->id,
        ]);

        Auth::login($user);

        if ($user->role->name === 'organizer') {
            return redirect()->route('organizer.dashboard');
        }

        return redirect()->to(session('url.intended', '/default'));
    }

    public function showLogin()
    {
        $previous = url()->previous();

        if (!str_contains($previous, route('login'))) {
            session(['url.intended' => $previous]);
        }

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            $user->load('role', 'image');

            if ($user->role->name === 'admin') {
                return redirect()->route('admin.dashboard');
            }

            if ($user->role->name === 'organizer') {
                return redirect()->route('organizer.dashboard');
            }

            return redirect()->to(session('url.intended', '/default'));
        }
        return back()->withErrors([
            'email' => 'Invalid credentials',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
