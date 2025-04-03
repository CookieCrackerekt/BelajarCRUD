<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('gettable', [LatihanController::class, 'getTable']);
Route::get('getform', [LatihanController::class, 'getForm']);