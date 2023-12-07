<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/animal')->name('animal.')->group(function(){
    
    Route::get(
        '/listagem', 
        [AnimalController::class, 'index']
    )->name('index');
    
    Route::get(
        '/cadastro', 
        [AnimalController::class, 'create']
    )->name('create');
    
    Route::post(
        '/salvar-cadastro', 
        [AnimalController::class, 'store']
    )->name('store');

    Route::get(
        '/editar/{id}', 
        [AnimalController::class, 'edit']
    )->name('edit');

    Route::put(
        '/alterar-cadastro/{id}', 
        [AnimalController::class, 'update']
    )->name('update');

    Route::get(
        '/detalhar/{id}', 
        [AnimalController::class, 'show']
    )->name('show');

    Route::get(
        '/deletar/{id}', 
        [AnimalController::class, 'destroy']
    )->name('destroy');
});