<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Buku;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjamans = Peminjaman::with(['anggota', 'buku'])->latest()->paginate(10);
        return view('peminjamans.index', compact('peminjamans'));
    }
    public function create()
    {
        $anggotas = Anggota::all();
        $bukus = Buku::where('stok', '>', 0)->get(); // Buku hanya yang stoknya > 0
        return view('peminjamans.create', compact('anggotas', 'bukus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'anggota_id' => 'required|exists:anggotas,id',
            'buku_id' => 'required|exists:bukus,id',
            'tanggal_pinjam' => 'required|date',
        ]);

        Peminjaman::create($request->all());

        return redirect()->route('peminjamans.index')->with('success', 'Peminjaman berhasil ditambahkan.');
    }


}
