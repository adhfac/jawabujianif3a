<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Buku
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('bukus.update', $buku->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="space-y-4">
                            <!-- Judul Buku -->
                            <div>
                                <x-input-label for="judul" :value="__('Judul Buku')" />
                                <x-text-input id="judul" class="block mt-1 w-full" type="text" name="judul" value="{{ old('judul', $buku->judul) }}" required autofocus />
                                <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                            </div>

                            <!-- Gambar Sampul -->
                            <div>
                                <x-input-label for="gambar_sampul" :value="__('Gambar Sampul')" />
                                <input type="file" id="gambar_sampul" name="gambar_sampul" class="mt-1 w-full">
                                @if($buku->gambar_sampul)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $buku->gambar_sampul) }}" alt="Gambar Sampul" class="w-32 h-32 object-cover">
                                    </div>
                                @endif
                                <x-input-error :messages="$errors->get('gambar_sampul')" class="mt-2" />
                            </div>

                            <!-- Pengarang -->
                            <div>
                                <x-input-label for="pengarang" :value="__('Pengarang')" />
                                <x-text-input id="pengarang" class="block mt-1 w-full" type="text" name="pengarang" value="{{ old('pengarang', $buku->pengarang) }}" required />
                                <x-input-error :messages="$errors->get('pengarang')" class="mt-2" />
                            </div>

                            <!-- Penerbit -->
                            <div>
                                <x-input-label for="penerbit" :value="__('Penerbit')" />
                                <x-text-input id="penerbit" class="block mt-1 w-full" type="text" name="penerbit" value="{{ old('penerbit', $buku->penerbit) }}" required />
                                <x-input-error :messages="$errors->get('penerbit')" class="mt-2" />
                            </div>

                            <!-- Tahun Terbit -->
                            <div>
                                <x-input-label for="tahun_terbit" :value="__('Tahun Terbit')" />
                                <x-text-input id="tahun_terbit" class="block mt-1 w-full" type="number" name="tahun_terbit" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}" required />
                                <x-input-error :messages="$errors->get('tahun_terbit')" class="mt-2" />
                            </div>

                            <!-- Kategori (Dropdown) -->
                            <div>
                                <x-input-label for="kategori" :value="__('Kategori')" />
                                <select id="kategori" name="kategori" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="Fiksi" {{ old('kategori', $buku->kategori) == 'Fiksi' ? 'selected' : '' }}>Fiksi</option>
                                    <option value="Non-Fiksi" {{ old('kategori', $buku->kategori) == 'Non-Fiksi' ? 'selected' : '' }}>Non-Fiksi</option>
                                    <option value="Ilmiah" {{ old('kategori', $buku->kategori) == 'Ilmiah' ? 'selected' : '' }}>Ilmiah</option>
                                    <option value="Biografi" {{ old('kategori', $buku->kategori) == 'Biografi' ? 'selected' : '' }}>Biografi</option>
                                </select>
                                <x-input-error :messages="$errors->get('kategori')" class="mt-2" />
                            </div>

                            <!-- Stok -->
                            <div>
                                <x-input-label for="stok" :value="__('Stok')" />
                                <x-text-input id="stok" class="block mt-1 w-full" type="number" name="stok" value="{{ old('stok', $buku->stok) }}" required />
                                <x-input-error :messages="$errors->get('stok')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-primary-button>
                                    {{ __('Perbarui Buku') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
