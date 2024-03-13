<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GamesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [GamesController::class, 'index'])
    ->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/portfolio', function () {
    return view('portfolio.index');
});

Route::get('/resume', function () {
    return view('resume');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/portfolio', [GamesController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/show/{id}', [GamesController::class, 'show'])->name('portfolio.show');

Route::middleware('auth')->group(function () {
    Route::get('/portfolio/create', [GamesController::class, 'create'])->name('portfolio.create');
    Route::post('/portfolio/store', [GamesController::class, 'store'])->name('portfolio.store');
    Route::post('/portfolio/uploadImage', [GamesController::class, 'uploadImage'])->name('portfolio.uploadImage');
    Route::get('/portfolio/{id}', [GamesController::class, 'edit'])->name('portfolio.edit');
    Route::patch('/portfolio/{id}', [GamesController::class, 'update'])->name('portfolio.update');
    Route::delete('/portfolio/{id}', [GamesController::class, 'destroy'])->name('portfolio.destroy');
});

require __DIR__.'/auth.php';
