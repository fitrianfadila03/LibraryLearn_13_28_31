<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function showRegistrationForm()
    {
        return view('register');
    }

    // Menangani proses registrasi
    public function register(Request $request)
    {
        // Aturan validasi
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed', // 'confirmed' untuk mencocokkan password
        ]);

        // Jika validasi gagal, kembali ke form dengan error
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Redirect ke halaman index setelah registrasi berhasil
        return redirect()->route('index');
    }

    public function home()
    {
        return view('home');
    }

    public function index()
    {
        return view('index');
    }
    
    public function login()
    {
        return view('login'); 
    }

    
}

class SomeController extends Controller
{
    public function someMethod(Request $request)
    {
        // Membuat instance validator
        $validator = Validator::make($request->all(), [
            'field_name' => 'required|email',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Lanjutkan logika Anda
    }
}
