<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function index()
    {
        return view('daftar');
    }
    public function store(Request $req)
    {

        $req->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:6',
            'confirm_password' => 'required|string|same:password',
        ]);

        // Buat user baru dengan role "user"
        $user = User::create([
            'name' => $req->name,
            'username' => $req->username,
            'password' => Hash::make($req->password),
            'roles' => 'user', // Pastikan ada kolom 'role' di tabel users
        ]);

        // Login otomatis setelah berhasil daftar
        Auth::login($user);

        // Redirect ke beranda user
        return redirect('/user/dashboard')->with('success', 'Pendaftaran berhasil!');
    }
}
