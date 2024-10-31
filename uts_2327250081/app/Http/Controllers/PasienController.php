<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function index()
    {
        // Hanya dapat diakses oleh pengguna yang login
        $pasien = Pasien::all();
        return view('home', compact('pasien'));
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        // Validasi data pasien
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'umur' => 'required|integer',
            'jenis_kelamin' => 'required|string',
            'tanggal_pendaftaran' => 'required|date',
        ]);

        // Simpan pasien ke database
        Pasien::create($request->all());
        
        return redirect()->route('home')->with('success', 'Pasien berhasil ditambahkan.');
    }

    public function show(Pasien $pasien)
    {
        return view('pasien.show', compact('pasien'));
    }

    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', compact('pasien'));
    }

    public function update(Request $request, Pasien $pasien)
    {
        // Validasi data pasien
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'umur' => 'required|integer',
            'jenis_kelamin' => 'required|string',
            'tanggal_pendaftaran' => 'required|date',
        ]);

        // Update pasien
        $pasien->update($request->all());
        
        return redirect()->route('home')->with('success', 'Pasien berhasil diperbarui.');
    }

    public function destroy(Pasien $pasien)
    {
        // Hapus pasien
        $pasien->delete();
        return redirect()->route('home')->with('success', 'Pasien berhasil dihapus.');
    }
}
