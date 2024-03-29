<?php

use App\Http\Controllers\AtividadeController;
use App\Http\Controllers\CicloController;
use App\Http\Controllers\ExercicioController;
use App\Http\Controllers\RemedioController;
use App\Http\Controllers\SemanaController;
use App\Http\Controllers\GerenciaTreinoController;
use App\Http\Controllers\TextoController;
use App\Http\Controllers\TreinoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/resetPassword', [App\Http\Controllers\LoginController::class, 'getResetPassword'])->name('resetPassword');
Route::get('/register', [App\Http\Controllers\LoginController::class, 'getRegister'])->name('register');
Route::post('/register', [App\Http\Controllers\LoginController::class, 'registerUser'])->name('register.create');


Route::middleware(['auth'])->group(function () {
    Route::get('/texto', [TextoController::class, 'index'])->name('texto.index');
    Route::post('/texto', [TextoController::class, 'store'])->name('texto.store');
    Route::get('/texto/create', [TextoController::class, 'create'])->name('texto.create');
    Route::get('/texto/{texto}', [TextoController::class, 'show'])->name('texto.show');
    Route::put('/texto/{texto}', [TextoController::class, 'update'])->name('texto.update');
    Route::delete('/texto/{texto}', [TextoController::class, 'destroy'])->name('texto.destroy');
    Route::get('/texto/{texto}/edit', [TextoController::class, 'edit'])->name('texto.edit');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/ciclo', [CicloController::class, 'store'])->name('ciclo.store');
    Route::get('/ciclo/create', [CicloController::class, 'create'])->name('ciclo.create');
    Route::put('/ciclo/{ciclo}', [CicloController::class, 'update'])->name('ciclo.update');
    Route::delete('/ciclo/{ciclo}', [CicloController::class, 'destroy'])->name('ciclo.destroy');
    Route::get('/ciclo/{ciclo}/edit', [CicloController::class, 'edit'])->name('ciclo.edit');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/semana', [SemanaController::class, 'store'])->name('semana.store');
    Route::get('/semana/create', [SemanaController::class, 'create'])->name('semana.create');
    Route::put('/semana/{semana}', [SemanaController::class, 'update'])->name('semana.update');
    Route::delete('/semana/{semana}', [SemanaController::class, 'destroy'])->name('semana.destroy');
    Route::get('/semana/{semana}/edit', [SemanaController::class, 'edit'])->name('semana.edit');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/treino', [TreinoController::class, 'store'])->name('treino.store');
    Route::get('/treino/create', [TreinoController::class, 'create'])->name('treino.create');
    Route::put('/treino/{treino}', [TreinoController::class, 'update'])->name('treino.update');
    Route::delete('/treino/{treino}', [TreinoController::class, 'destroy'])->name('treino.destroy');
    Route::get('/treino/{treino}/edit', [TreinoController::class, 'edit'])->name('treino.edit');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/exercicio', [ExercicioController::class, 'store'])->name('exercicio.store');
    Route::get('/exercicio/create', [ExercicioController::class, 'create'])->name('exercicio.create');
    Route::put('/exercicio/{exercicio}', [ExercicioController::class, 'update'])->name('exercicio.update');
    Route::delete('/exercicio/{exercicio}', [ExercicioController::class, 'destroy'])->name('exercicio.destroy');
    Route::get('/exercicio/{exercicio}/edit', [ExercicioController::class, 'edit'])->name('exercicio.edit');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/gerenciaTreino', [GerenciaTreinoController::class, 'index'])->name('gerenciaTreino.index');
    Route::post('/gerenciaTreino', [GerenciaTreinoController::class, 'store'])->name('gerenciaTreino.store');
    Route::get('/gerenciaTreino/create', [GerenciaTreinoController::class, 'create'])->name('gerenciaTreino.create');
    Route::get('/gerenciaTreino/{gerenciaTreino}', [GerenciaTreinoController::class, 'show'])->name('gerenciaTreino.show');
    Route::put('/gerenciaTreino/{gerenciaTreino}', [GerenciaTreinoController::class, 'update'])->name('gerenciaTreino.update');
    Route::delete('/gerenciaTreino/{gerenciaTreino}', [GerenciaTreinoController::class, 'destroy'])->name('gerenciaTreino.destroy');
    Route::get('/gerenciaTreino/{gerenciaTreino}/edit', [GerenciaTreinoController::class, 'edit'])->name('gerenciaTreino.edit');
    Route::get('/configurarTreinos', [GerenciaTreinoController::class, 'configurar'])->name('gerenciaTreino.configurar');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/remedio', [RemedioController::class, 'index'])->name('remedio.index');
    Route::post('/remedio', [RemedioController::class, 'store'])->name('remedio.store');
    Route::get('/remedio/create', [RemedioController::class, 'create'])->name('remedio.create');
    Route::get('/remedio/{remedio}', [RemedioController::class, 'show'])->name('remedio.show');
    Route::put('/remedio/{remedio}', [RemedioController::class, 'update'])->name('remedio.update');
    Route::delete('/remedio/{remedio}', [RemedioController::class, 'destroy'])->name('remedio.destroy');
    Route::get('/remedio/{remedio}/edit', [RemedioController::class, 'edit'])->name('remedio.edit');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/atividade/geral', [AtividadeController::class, 'geral'])->name('atividade.geral');
    Route::get('/atividade', [AtividadeController::class, 'index'])->name('atividade.index');
    Route::post('/atividade', [AtividadeController::class, 'store'])->name('atividade.store');
    Route::get('/atividade/create', [AtividadeController::class, 'create'])->name('atividade.create');
    Route::get('/atividade/{atividade}', [AtividadeController::class, 'show'])->name('atividade.show');
    Route::put('/atividade/{atividade}', [AtividadeController::class, 'update'])->name('atividade.update');
    Route::put('/atividade/concluir/{atividade}', [AtividadeController::class, 'alterarStatus'])->name('atividade.alterarStatus');
    Route::delete('/atividade/{atividade}', [AtividadeController::class, 'destroy'])->name('atividade.destroy');
    Route::get('/atividade/{atividade}/edit', [AtividadeController::class, 'edit'])->name('atividade.edit');
});
