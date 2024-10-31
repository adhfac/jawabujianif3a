@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <h3 class="mt-4">Daftar Pasien</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Umur</th>
                                <th>Jenis Kelamin</th>
                                <th>Tanggal Pendaftaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pasien as $p)
                                <tr>
                                    <td>
                                        <a href="{{ route('pasien.show', $p->id) }}" class="text-black">{{ $p->nama }}</a>
                                    </td>
                                    <td>{{ $p->alamat }}</td>
                                    <td>{{ $p->umur }}</td>
                                    <td>{{ $p->jenis_kelamin }}</td>
                                    <td>{{ $p->tanggal_pendaftaran }}</td>
                                    <td>
                                        <a href="{{ route('pasien.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('pasien.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pasien ini?');" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('pasien.create') }}" class="btn btn-primary">Tambah Pasien</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
