<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Articulo;
use App\Http\Controllers\Marca;
use App\Http\Controllers\Tienda;

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

require __DIR__.'/auth.php';

Route::get('/dashboard', [HomeController::class, 'index'] );

Route::get('/sotelo/articulo', [App\Http\Controllers\Articulo::class, 'index'])->name('listado_articulos');
Route::get('/sotelo/marca', [App\Http\Controllers\Marca::class, 'index'])->name('listado_marcas');
Route::get('/sotelo/presentacion', [App\Http\Controllers\Tienda::class, 'index'])->name('tienda');
