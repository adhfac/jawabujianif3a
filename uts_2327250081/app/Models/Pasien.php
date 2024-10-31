<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasiens';

    // Tentukan kolom yang dapat diisi (fillable)
    protected $fillable = [
        'nama',
        'alamat',
        'umur',
        'jenis_kelamin',
        'tanggal_pendaftaran',
    ];
}
