<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use App\Models\Note;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// FRONT
Route::get('/home', [HomeController::class, 'home'])->name('home');
// CKEDITOR
Route::get('notes/ckeditor', [NoteController::class, 'index'])->name('ckeditors.index');
Route::get('notes/ckeditors/create', [NoteController::class, 'create'])->name('ckeditors.create');
Route::post('notes/ckeditors/store', [NoteController::class, 'store'])->name('ckeditors.store');
Route::get('perso/ckeditors/{id}/show', [NoteController::class, 'show'])->name('ckeditors.show');
Route::get('notes/ckeditors/{id}/edit', [NoteController::class, 'edit'])->name('ckeditors.edit');
Route::put('notes/ckeditors/{id}/update', [NoteController::class, 'update'])->name('ckeditors.update');
Route::delete('notes/ckeditors/{id}/delete', [NoteController::class, 'destroy'])->name('ckeditors.destroy');

// PRIVE 
Route::get('perso/prive', [UserController::class, 'index'])->name('prive.index');
Route::post('perso/prive', [UserController::class, 'store_prive'])->name('prive.store');
Route::post('perso/prive/{id}', [NoteController::class, 'share'])->name('prive.share');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
