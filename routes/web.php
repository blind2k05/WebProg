<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;



// there is something in this route, make sure again later

Route::get('/', [GameController::class, 'index'])->name('games.index');
Route::get('/games/{id}', [GameController::class, 'show'])->name('games.show');
Route::get('/transactions/create', [TransactionController::class, 'create'])->middleware('auth')->name('transactions.create');
Route::post('/transactions', [TransactionController::class, 'store'])->middleware('auth')->name('transactions.store');

Route::get('/transactions', [TransactionController::class, 'index'])
    ->middleware('auth')
    ->name('transactions.index');


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/__seed-games', function () {
    Artisan::call('db:seed', [
        '--class' => 'GameSeeder',
        '--force' => true,
    ]);

    return 'Seeder executed';
});



