<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermohonanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/permohonan', [PermohonanController::class, 'index'])->name('permohonan.index');
Route::post('/permohonan_simpan', [PermohonanController::class, 'store'])->name('permohonan.simpan');
