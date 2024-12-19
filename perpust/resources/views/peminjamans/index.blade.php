<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Daftar Peminjaman
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('peminjamans.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-md mb-6 inline-block hover:bg-blue-600">
                        Tambah Peminjaman
                    </a>

                    <table class="w-full border-collapse border border-gray-200">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border border-gray-300 px-4 py-2 text-left">#</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Nama Anggota</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Judul Buku</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Tanggal Pinjam</th>
                                <th class="border border-gray-300 px-4 py-2 text-left">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($peminjamans as $peminjaman)
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $peminjaman->anggota->nama }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $peminjaman->buku->judul }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $peminjaman->tanggal_pinjam }}</td>
                                    <td class="border border-gray-300 px-4 py-2">
                                        <a href="{{ route('peminjamans.edit', $peminjaman->id) }}" class="text-blue-500 hover:underline">Edit</a>
                                        <form action="{{ route('peminjamans.destroy', $peminjaman->id) }}" method="POST" class="inline-block ml-2">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Yakin ingin menghapus peminjaman ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="border border-gray-300 px-4 py-2 text-center">Belum ada data peminjaman.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="mt-6">
                        {{ $peminjamans->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
