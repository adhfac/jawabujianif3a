<?php
namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Menampilkan semua buku
    public function index()
    {
        $bukus = Buku::all();
        return view('bukus.index', compact('bukus'));
    }

    // Menampilkan form untuk membuat buku baru
    public function create()
    {
        return view('bukus.create');
    }

    // Menyimpan buku baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar_sampul' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|digits:4',
            'kategori' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
        ]);

        $gambar_sampul = null;
        if ($request->hasFile('gambar_sampul')) {
            $gambar_sampul = $request->file('gambar_sampul')->store('gambar_sampul', 'public');
        }

        Buku::create([
            'judul' => $request->judul,
            'gambar_sampul' => $gambar_sampul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'kategori' => $request->kategori,
            'stok' => $request->stok,
        ]);

        return redirect()->route('bukus.index')->with('success', 'Buku berhasil ditambahkan');
    }

    // Menampilkan form untuk mengedit buku
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('bukus.edit', compact('buku'));
    }

    // Memperbarui buku di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'gambar_sampul' => 'nullable|image|mimes:jpg,jpeg,png|max:5120',
            'pengarang' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|digits:4',
            'kategori' => 'required|string|max:255',
            'stok' => 'required|integer|min:0',
        ]);

        $buku = Buku::findOrFail($id);

        $gambar_sampul = $buku->gambar_sampul;
        if ($request->hasFile('gambar_sampul')) {
            // Hapus gambar lama jika ada
            if ($buku->gambar_sampul) {
                \Storage::delete('public/' . $buku->gambar_sampul);
            }
            $gambar_sampul = $request->file('gambar_sampul')->store('gambar_sampul', 'public');
        }

        $buku->update([
            'judul' => $request->judul,
            'gambar_sampul' => $gambar_sampul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'tahun_terbit' => $request->tahun_terbit,
            'kategori' => $request->kategori,
            'stok' => $request->stok,
        ]);

        return redirect()->route('bukus.index')->with('success', 'Buku berhasil diperbarui');
    }

    // Menghapus buku dari database
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);

        // Hapus gambar jika ada
        if ($buku->gambar_sampul) {
            \Storage::delete('public/' . $buku->gambar_sampul);
        }

        $buku->delete();
        return redirect()->route('bukus.index')->with('success', 'Buku berhasil dihapus');
    }
}
