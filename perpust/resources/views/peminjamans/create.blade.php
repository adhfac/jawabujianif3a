<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Peminjaman
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="list-disc list-inside text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('peminjamans.store') }}" method="POST">
                        @csrf

                        <!-- Pilih Anggota -->
                        <div class="mb-4">
                            <label for="anggota_id" class="block text-sm font-medium text-gray-700">Pilih Anggota</label>
                            <select id="anggota_id" name="anggota_id" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Pilih Anggota</option>
                                @foreach ($anggotas as $anggota)
                                    <option value="{{ $anggota->id }}">{{ $anggota->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Pilih Buku -->
                        <div class="mb-4">
                            <label for="buku_id" class="block text-sm font-medium text-gray-700">Pilih Buku</label>
                            <select id="buku_id" name="buku_id" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Pilih Buku</option>
                                @foreach ($bukus as $buku)
                                    <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Tanggal Pinjam -->
                        <div class="mb-4">
                            <label for="tanggal_pinjam" class="block text-sm font-medium text-gray-700">Tanggal Pinjam</label>
                            <input type="date" id="tanggal_pinjam" name="tanggal_pinjam" value="{{ old('tanggal_pinjam') }}" class="block w-full mt-1 rounded-md border-gray-300 shadow-sm focus:ring-blue-500 focus:border-blue-500">
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                                Simpan
                            </button>
                            <a href="{{ route('peminjamans.index') }}" class="ml-4 text-blue-500 hover:underline">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
