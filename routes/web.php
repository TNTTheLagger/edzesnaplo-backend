<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BejegyzesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/edzesnaplo', [BejegyzesController::class, 'index']);
Route::post('/edzesnaplo', [BejegyzesController::class, 'store']);
