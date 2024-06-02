<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil
            return redirect()->intended('beranda');
        }

        // Jika otentikasi gagal
        return back()->withErrors(['email' => 'Email atau password salah']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function dashboard()
    {
        $user = Auth::user();
        $data = POST::all();
        $list = POST::where('user_id', $user->id)->get();

        if (!$user) {
            return redirect()->route('login');
        }
        else{
            return view('user.beranda', compact('user' , 'list', 'data'));
        }
    }
}
