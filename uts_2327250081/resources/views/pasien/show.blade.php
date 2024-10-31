@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Pasien</h1>

    <div class="mb-3">
        <strong>Nama:</strong> {{ $pasien->nama }}
    </div>
    <div class="mb-3">
        <strong>Alamat:</strong> {{ $pasien->alamat }}
    </div>
    <div class="mb-3">
        <strong>Umur:</strong> {{ $pasien->umur }}
    </div>
    <div class="mb-3">
        <strong>Jenis Kelamin:</strong> {{ $pasien->jenis_kelamin }}
    </div>
    <div class="mb-3">
        <strong>Tanggal Pendaftaran:</strong> {{ $pasien->tanggal_pendaftaran }}
    </div>

    <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
