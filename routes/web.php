<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/animal-listagem', 
[AnimalController::class, 'index']);

Route::get('/animal-gravar', 
[AnimalController::class, 'store']);
