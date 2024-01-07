<?php

use App\Http\Controllers\LetterController;
use App\Http\Controllers\UsergController;
use App\Http\Controllers\LetterTypeController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
});

Route::prefix('/user')->name('user.')->group(function() {
    Route::get('/create', [UserController::class, 'create'])->name('create');
    Route::post('/store', [UserController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    // mengubah data ke db
    Route::patch('/update/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
    Route::get('/', [UserController::class, 'index'])->name('home');
});

Route::prefix('/userg')->name('userg.')->group(function() {
    Route::get('/create', [UsergController::class, 'create'])->name('create');
    Route::post('/store', [UsergController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [UsergController::class, 'edit'])->name('edit');
    // mengubah data ke db
    Route::patch('/update/{id}', [UsergController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [UsergController::class, 'destroy'])->name('delete');
    Route::get('/', [UsergController::class, 'index'])->name('home');
});

Route::prefix('/lettertype')->name('lettertype.')->group(function() {
    Route::get('/create', [LetterTypeController::class, 'create'])->name('create');
    Route::get('/', [LetterTypeController::class, 'index'])->name('home');
    Route::post('/store', [LetterTypeController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [LetterTypeController::class, 'edit'])->name('edit');
    Route::delete('/{id}', [LetterTypeController::class, 'destroy'])->name('delete');

});