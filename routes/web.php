<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\RoleController;
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

Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');
Route::get('/roles/create', [RoleController::class, 'create']);
Route::post('/users', [RoleController::class, 'store'])->name('roles.store');
Route::get('/roles/{idRole}', [RoleController::class, 'show'])->name('roles.show');
Route::post('/roles/update', [RoleController::class, 'update'])->name('roles.update');
Route::get('/roles/delete/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');

