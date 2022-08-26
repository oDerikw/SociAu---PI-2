<?php

use App\Http\Controllers\RegisterQuestionController;
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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/jogar', function () {
    return view('homeQuiz');
})->name('jogar');

Route::get('/jogar/dificuldade', function () {
    return view('diffQuiz');
})->name('diffQuiz');

Route::get('/jogar/azul', function () {
    return view('diffAzul');
})->name('blue');

Route::get('/jogar/amarelo', function () {
    return view('diffAmarelo');
})->name('yellow');

Route::get('/jogar/vermelho', function () {
    return view('diffRosa');
})->name('red');

Route::get('/jogar/verde', function () {
    return view('diffVerde');
})->name('green');

Route::get('/quiz', function () {
    return view('quizAzul');
})->name('quiz');

Route::get('/pais', function() {
    return view('parents');
})->name('parents');

Route::middleware('auth')->group(function () {
    Route::get('/cadastro-perguntas', [RegisterQuestionController::class, 'create'])->name('questionRegister');
    Route::post('/cadastro-perguntas', [RegisterQuestionController::class, 'store'])->name('questionRegister');
});
    

require __DIR__.'/auth.php';