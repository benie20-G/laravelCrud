<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/users', [CrudController::class, 'index'])->name('index');
Route::get('/users/create', [CrudController::class, 'create'])->name('create');
Route::post('/users', [CrudController::class, 'store'])->name('store');
Route::get('/users/{id}', [CrudController::class, 'show'])->name('show');
Route::get('/users/{id}/edit', [CrudController::class, 'edit'])->name('edit');
Route::put('/users/{id}', [CrudController::class, 'update'])->name('update');
Route::delete('/users/{id}', [CrudController::class, 'destroy'])->name('destroy');
?>

