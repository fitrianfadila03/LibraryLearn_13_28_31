<?php

namespace App\Http\Controllers;

use App\Models\Registers; // Import model Register
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistersController extends Controller
{
    // Method untuk menampilkan form pendaftaran
    public function create()
    {
        return view('registers'); // Ganti dengan nama view yang sesuai
    }

    // Method untuk menyimpan data pendaftaran
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:registers',
            'password' => 'required|string|min:8',
        ]);

        // Menyimpan data ke dalam tabel registers
        Registers::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Menggunakan Hash untuk menyimpan password
        ]);

        // Redirect ke halaman sukses atau Filament
        return redirect()->route('filament.resources.registers.index')
                         ->with('success', 'Pendaftaran berhasil!');
    }
}
