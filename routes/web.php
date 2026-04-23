<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/Pegawai', [PagesController::class, "index"]);
Route::get('/Pegawai/create', [PegawaiController::class, 'create']);
Route::post('/Pegawai/create', [PegawaiController::class, 'store']);