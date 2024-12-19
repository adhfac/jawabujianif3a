<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Anggota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('anggotas.store') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-semibold text-gray-700">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ old('nama') }}" class="mt-1 block w-full border border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                            <input type="email" name="email" id="email" value="{{ old('email') }}" class="mt-1 block w-full border border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label for="no_telp" class="block text-sm font-semibold text-gray-700">No. Telepon</label>
                            <input type="text" name="no_telp" id="no_telp" value="{{ old('no_telp') }}" class="mt-1 block w-full border border-gray-300 rounded-md" required>
                        </div>
                        <div class="mb-4">
                            <label for="alamat" class="block text-sm font-semibold text-gray-700">Alamat</label>
                            <textarea name="alamat" id="alamat" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md" required>{{ old('alamat') }}</textarea>
                        </div>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
