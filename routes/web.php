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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{idUser}', [UserController::class, 'show'])->name('users.show');
Route::post('/users/update', [UserController::class, 'update'])->name('users.update');
Route::get('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');

Route::get('/multimedia', [MultimediaController::class, 'index'])->name('multimedia.index');
Route::get('/multimedia/create', [MultimediaController::class, 'create']);
Route::post('/multimedia', [MultimediaController::class, 'store'])->name('multimedia.store');
Route::get('/multimedia/{idUser}', [MultimediaController::class, 'show'])->name('multimedia.show');
Route::post('/multimedia/update', [MultimediaController::class, 'update'])->name('multimedia.update');
Route::get('/multimedia/delete/{id}', [MultimediaController::class, 'destroy'])->name('multimedia.destroy');


Route::get('/categories/futbol', [CategoriesController::class, 'futbol'])->name('categories.futbol');

Route::get('/categories/canto', [CategoriesController::class, 'canto'])->name('categories.canto');

Route::get('/categories/arte', [CategoriesController::class, 'arte'])->name('categories.arte');

Route::get('/categories/danza', [CategoriesController::class, 'danza'])->name('categories.danza');

Route::get('/categories/create', [CategoriesController::class, 'create']);
Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
Route::get('/categories/{idCategories}', [CategoriesController::class, 'show'])->name('categories.show');
Route::post('/categories/update', [CategoriesController::class, 'update'])->name('categories.update');
Route::get('/categories/delete/{id}', [CategoriesController::class, 'destroy'])->name('categories.destroy');



