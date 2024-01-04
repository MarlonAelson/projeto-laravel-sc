<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AnimalController,
    UserController
};

Route::middleware('auth')->group(function(){

    Route::get('/', function () {
        return view('welcome');
    });

    Route::name('animal.')->group(function(){
        Route::get('/animal-listagem',              [AnimalController::class, 'index'])
        ->middleware(['permission:animal_listar'])->name('index');
        
        Route::get('/animal-detalhes/{id}',         [AnimalController::class, 'show'])
        ->middleware(['permission:animal_listar'])->name('show');
        
        Route::get('/animal-cadastro',              [AnimalController::class, 'create'])
        ->middleware(['permission:animal_cadastrar'])->name('create');

        Route::post('/animal-gravar',               [AnimalController::class, 'store'])
        ->middleware(['permission:animal_cadastrar'])->name('store');

        Route::get('/animal-edicao/{id}',           [AnimalController::class, 'edit'])
        ->middleware(['permission:animal_editar'])->name('edit');

        Route::put('/animal-gravar-edicao/{id}',    [AnimalController::class, 'update'])
        ->middleware(['permission:animal_editar'])->name('update');

        Route::get('/animal-deletar/{id}',          [AnimalController::class, 'destroy'])
        ->middleware(['permission:animal_deletar'])->name('destroy');
    });

    Route::name('usuario.')->group(function(){
        Route::get('/usuario-listagem',              [UserController::class, 'index'])->name('index');
        
        Route::get('/usuario-detalhes/{id}',         [UserController::class, 'show'])->name('show');

        Route::post('/usuario-gravar',               [UserController::class, 'store'])->name('store');

        Route::get('/usuario-cadastro',              [UserController::class, 'create'])->name('create');

        Route::get('/usuario-edicao/{id}',           [UserController::class, 'edit'])->name('edit');

        Route::put('/usuario-gravar-edicao/{id}',    [UserController::class, 'update'])->name('update');

        Route::get('/usuario-deletar/{id}',          [UserController::class, 'destroy'])->name('destroy');
    });

});


  
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
