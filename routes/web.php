<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;


Route::get('welcome', function () {
    return view('welcome');
});

Route::get('teste', function () {
    return view('teste');
});

Route::resource('alunos',AlunoController::class);
Route::resource('cursos',CursoController::class);

