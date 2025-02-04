<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BejegyzesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/api/edzesnaplo', [BejegyzesController::class, 'index']);
Route::post('/api/edzesnaplo', [BejegyzesController::class, 'store']);
