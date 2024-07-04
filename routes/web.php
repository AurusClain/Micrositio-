<?php
use App\Http\Controllers\MicrositeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('microsites', MicrositeController::class);
});

Route::middleware(['auth', 'role:guest'])->group(function () {
    Route::get('microsites', [MicrositeController::class, 'index'])->name('microsites.index');
    Route::get('microsites/{microsite}', [MicrositeController::class, 'show'])->name('microsites.show');
});


require __DIR__.'/auth.php';
