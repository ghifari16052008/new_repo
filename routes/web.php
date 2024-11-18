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
// create route
Route::get('/datapembeli/create', [BahanController::class, 'create']);

// route untuk siswa/store
Route::post('/datapembeli', [BahanController::class, 'store']);

// Route Update
Route::get('/datapembeli/{id}/update', [BahanController::class, 'update']);

// route prosesupdate
Route::put('/bahan/{id}', [BahanController::class, 'prosesupdate']);

// route untuk delete data
Route::delete('/bahan/{id}', [BahanController::class, 'deleteData']);



