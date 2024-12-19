<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            Daftar Buku
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('bukus.create') }}" class="px-6 py-3 bg-blue-500 text-white rounded-md mb-6 inline-block hover:bg-blue-600 transition duration-200">
                        Tambah Buku
                    </a>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @foreach ($bukus as $buku)
                            <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 hover:shadow-2xl transition-all duration-300">
                                <img src="{{ asset('storage/' . $buku->gambar_sampul) }}" alt="{{ $buku->judul }}" class="w-full h-48 object-cover rounded-md mb-4">
                                
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $buku->judul }}</h3>
                                <p class="text-sm text-gray-600 mb-1">Pengarang: <span class="font-semibold">{{ $buku->pengarang }}</span></p>
                                <p class="text-sm text-gray-600 mb-1">Penerbit: <span class="font-semibold">{{ $buku->penerbit }}</span></p>
                                <p class="text-sm text-gray-600 mb-1">Tahun Terbit: <span class="font-semibold">{{ $buku->tahun_terbit }}</span></p>
                                <p class="text-sm text-gray-600 mb-1">Kategori: <span class="font-semibold">{{ $buku->kategori }}</span></p>
                                <p class="text-sm text-gray-600 mb-4">Stok: <span class="font-semibold">{{ $buku->stok }}</span></p>

                                <div class="mt-4 flex space-x-4">
                                    <a href="{{ route('bukus.edit', $buku->id) }}" class="bg-yellow-500 text-white px-6 py-3 rounded-md hover:bg-yellow-600 transition duration-200 transform hover:scale-105">
                                        Edit
                                    </a>
                                    
                                    <form action="{{ route('bukus.destroy', $buku->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-6 py-3 rounded-md hover:bg-red-600 transition duration-200 transform hover:scale-105">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
