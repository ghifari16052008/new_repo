<?php

use App\Http\Controllers\BahanController;
use Illuminate\Support\Facades\Route;
use Recources\views\create;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bahanSotoBetawi', function () {
    return view('bahan');
});


Route::get('/datapembeli', [BahanController::class, 'index']);

Route::get('/datapembeli/create', [BahanController::class, 'create']);

// route untuk siswa/store
Route::post('/bahan/store', [BahanController::class, 'store']);