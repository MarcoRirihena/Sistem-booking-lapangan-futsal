<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\PenggunaController;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WebController::class, 'index']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Route::get('/', [PenggunaController::class, 'index']);

