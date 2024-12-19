<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <!-- Link Menuju Peminjaman -->
            <a href="{{ route('peminjamans.index') }}" 
               class="text-sm bg-blue-600 text-white px-4 py-2 rounded-md shadow-md hover:bg-blue-700 transition duration-200">
                Daftar Peminjaman
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- Search Bar -->
                    <form method="GET" action="{{ route('dashboard') }}" class="mb-8 flex flex-col sm:flex-row sm:space-x-4">
                        <input 
                            type="text" 
                            name="search" 
                            placeholder="Cari Buku..."
                            value="{{ request()->search }}"
                            class="px-4 py-3 border border-gray-300 rounded-md shadow-sm w-full sm:w-9/12 focus:ring-2 focus:ring-blue-500 transition duration-200">
                        
                        <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-md mt-4 sm:mt-0 sm:w-3/12 hover:bg-blue-700 transition duration-200">
                            Cari
                        </button>
                    </form>

                    <!-- Display Books -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        @foreach ($bukus as $buku)
                            <div class="bg-white border border-gray-200 rounded-lg shadow-lg p-6 hover:shadow-2xl transition-all duration-300">
                                <img src="{{ asset('storage/' . $buku->gambar_sampul) }}" alt="{{ $buku->judul }}" class="w-full h-48 object-cover rounded-md mb-4">
                                
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $buku->judul }}</h3>
                                <p class="text-sm text-gray-600 mb-1">Pengarang: <span class="font-semibold">{{ $buku->pengarang }}</span></p>
                                <p class="text-sm text-gray-600 mb-1">Penerbit: <span class="font-semibold">{{ $buku->penerbit }}</span></p>
                                <p class="text-sm text-gray-600 mb-1">Tahun Terbit: <span class="font-semibold">{{ $buku->tahun_terbit }}</span></p>
                                <p class="text-sm text-gray-600 mb-1">Kategori: <span class="font-semibold">{{ $buku->kategori }}</span></p>
                                <p class="text-sm text-gray-600">Stok: <span class="font-semibold">{{ $buku->stok }}</span></p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
