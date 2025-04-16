<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\MakananController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('buku', BukuController::class);
Route::resource('makanan', MakananController::class);