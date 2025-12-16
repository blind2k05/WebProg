<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;



// there is something in this route, make sure again later

Route::get('/', [GameController::class, 'index'])->name('games.index');
Route::get('/games/{id}', [GameController::class, 'show'])->name('games.show');
Route::get('/transactions/create', [TransactionController::class, 'create'])->middleware('auth')->name('transactions.create');
Route::post('/transactions', [TransactionController::class, 'store'])->middleware('auth')->name('transactions.store');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



