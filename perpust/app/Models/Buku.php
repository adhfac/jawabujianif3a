<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Peminjaman;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'bukus';

    protected $fillable = [
        'judul',
        'gambar_sampul',
        'pengarang',
        'penerbit',
        'tahun_terbit',
        'kategori',
        'stok',
    ];

    public function peminjamans()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
