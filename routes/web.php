<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MultimediaController;
use App\Http\Controllers\CategoriesController;

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
Route::get('/', [UserController::class, 'home'])->name('users.home');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{idUser}', [UserController::class, 'show'])->name('users.show');
Route::post('/users/update', [UserController::class, 'update'])->name('users.update');
Route::get('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');



Route::get('/categories/futbol', [CategoriesController::class, 'futbol'])->name('categories.futbol');

Route::get('/categories/canto', [CategoriesController::class, 'canto'])->name('categories.canto');

Route::get('/categories/arte', [CategoriesController::class, 'arte'])->name('categories.arte');

Route::get('/categories/danza', [CategoriesController::class, 'danza'])->name('categories.danza');

Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
Route::get('/categories/{idCategories}', [CategoriesController::class, 'show'])->name('categories.show');
Route::post('/categories/update', [CategoriesController::class, 'update'])->name('categories.update');
Route::get('/categories/delete/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');



Route::get('Mision', function () {
    return view('mision');
})->name('mision');

Route::get('Vision', function () {
    return view('vision');
})->name('vision');

Route::get('Perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('Contactenos', function () {
    return view('contactenos');
})->name('contactenos');


Route::get('Futbol', function () {
    return view('futbol');
})->name('futbol');

Route::get('Canto', function () {
    return view('canto');
})->name('canto');

Route::get('Arte', function () {
    return view('arte');
})->name('arte');

Route::get('Danza', function () {
    return view('danza');
})->name('danza');

