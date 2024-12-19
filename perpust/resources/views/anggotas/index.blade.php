<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl md:text-2xl text-gray-800 leading-tight">
            {{ __('Daftar Anggota') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <!-- Tombol Tambah Anggota -->
                    <a href="{{ route('anggotas.create') }}" class="px-6 py-3 bg-blue-500 text-white rounded-md mb-6 inline-block hover:bg-blue-600 transition duration-200">
                        Tambah Anggota
                    </a>

                    <!-- Wrapper Tabel untuk Responsivitas -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white border-collapse">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="px-4 md:px-6 py-3 border-b text-left text-sm md:text-base font-semibold text-gray-700">
                                        Nama
                                    </th>
                                    <th class="px-4 md:px-6 py-3 border-b text-left text-sm md:text-base font-semibold text-gray-700">
                                        Email
                                    </th>
                                    <th class="px-4 md:px-6 py-3 border-b text-left text-sm md:text-base font-semibold text-gray-700">
                                        No. Telepon
                                    </th>
                                    <th class="px-4 md:px-6 py-3 border-b text-left text-sm md:text-base font-semibold text-gray-700">
                                        Alamat
                                    </th>
                                    <th class="px-4 md:px-6 py-3 border-b text-left text-sm md:text-base font-semibold text-gray-700">
                                        Aksi
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($anggotas as $anggota)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-4 md:px-6 py-3 border-b text-sm md:text-base">{{ $anggota->nama }}</td>
                                        <td class="px-4 md:px-6 py-3 border-b text-sm md:text-base">{{ $anggota->email }}</td>
                                        <td class="px-4 md:px-6 py-3 border-b text-sm md:text-base">{{ $anggota->no_telp }}</td>
                                        <td class="px-4 md:px-6 py-3 border-b text-sm md:text-base">{{ $anggota->alamat }}</td>
                                        <td class="px-4 md:px-6 py-3 border-b flex flex-col sm:flex-row items-start sm:items-center space-y-2 sm:space-y-0 sm:space-x-4">
                                            <a href="{{ route('anggotas.edit', $anggota->id) }}" class="text-blue-600 hover:text-blue-800 transition duration-200">
                                                Edit
                                            </a>
                                            <form action="{{ route('anggotas.destroy', $anggota->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800 transition duration-200">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
