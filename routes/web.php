<?php

use App\Http\Controllers\SedeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth.apikey'])->get('/api/sedes', [SedeController::class, 'index']);
