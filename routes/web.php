<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::get('/', function () {
    return view('welcome');
});

Route::name('animal.')->group(function(){
    Route::get('/animal-listagem',       [AnimalController::class, 'index'])->name('index');

    Route::post('/animal-gravar',        [AnimalController::class, 'store'])->name('store');
    
    Route::get('/animal-detalhes/{id}',  [AnimalController::class, 'show'])->name('show');

    Route::get('/animal-cadastro',       [AnimalController::class, 'create'])->name('create');
});


  