<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Registrasi Penggguna'
        ]);
    }

    public function storeRegister(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|min:3|max:255',
            'alamat'    => 'required',
            'no_telp'   => 'required',
            'no_sim'    => 'required',
            'email'     => 'required|email',
            'password'  => 'required|min:6|max:255'
        ]);

        // #2 Cara dari Laravel
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Simpan data yang berhasil lolos validasi
        User::create($validatedData);

        /** 
         *  jika data lolos validasi dan berhasil disimpan, maka tampilkan pesan
         *  setelah itu alihkan ke halaman login
         */
        return redirect('/')->with('success', 'Registrasi berhasil, silahkan login');
    }

    public function dologin(Request $request)
    {
        // cek email dan password
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $request->session()->regenerate();

            // cek role
            if (auth()->user()->role_id === 1) {
                return redirect()->intended('/dashboard');
            } else if (auth()->user()->role_id === 2) {
                return redirect()->intended('/dashboard');
            }
        } else {
            return back()->with('error', 'Email atau Password salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
