<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\AnggotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('anggota', AnggotaController::class);
Route::get('gettable', [LatihanController::class, 'getTable']);
Route::get('getform', [LatihanController::class, 'getForm']);