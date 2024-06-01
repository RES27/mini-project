<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function onregis(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|confirmed',
        ],
        [
            'name.required' => 'Nama harus diisi',
            'username.required' => 'Username harus diisi',
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Password tidak cocok',
        ]);


        $user = User::create([
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        DB::table('profil')->insert([
            'user_id' => $user->id,
            'username' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            return redirect()->route('login')
                ->with('success', 'User created successfully');
        } else {
            return redirect()->route('registrasi')
                ->with('error', 'Failed to create user');
        }
    }

    public function login()
    {
        return view('auth.login');
    }

    public function onlogin(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
        ],
        [
            'email.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal 8 karakter',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                return redirect()->route('explore');
            } else {
                return redirect()->route('login')
                    ->with('error', 'Password is wrong');
            }
        } else {
            return redirect()->route('login')
                ->with('error', 'Email is not registered');
        }
    }

    public function logout()
    {
        return redirect()->route('login');
    }
}
