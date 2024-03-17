<?php

use Illuminate\Support\Facades\Route;

//route resource
Route::resource('/keranjangs', 
\App\Http\Controllers\KeranjangController::class);

Route::resource('/keranjang', 
\App\Http\Controllers\keranjangController::class);