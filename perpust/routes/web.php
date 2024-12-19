<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Models\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function (Request $request) {
    $query = Buku::query();

    // Jika ada parameter pencarian, filter berdasarkan judul
    if ($request->has('search') && $request->search != '') {
        $query->where('judul', 'like', '%' . $request->search . '%');
    }

    // Mengambil data buku yang sudah difilter
    $bukus = $query->get();

    return view('dashboard', compact('bukus'));
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('bukus', BukuController::class);
    Route::resource('anggotas', AnggotaController::class);
    Route::resource('peminjamans', PeminjamanController::class);

});


require __DIR__.'/auth.php';
