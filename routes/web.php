<?php

use App\Http\Controllers\PlayController;
use App\Http\Controllers\RegisterQuestionController;
use App\Http\Controllers\RetrieveQuestionController;
use App\Http\Controllers\VerifyAlternativeController;
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

Route::get('/categoria', function () {
    return view('quiz/homeQuiz');
})->name('choose_category');

Route::get('/pais', function() {
    return view('parents');
})->name('parents');


Route::get('/empatia', function () {
    return view('dificuldades/diffAzul');
})->name('blue');

Route::get('/cotidiano', function () {
    return view('dificuldades/diffAmarelo');
})->name('yellow');

Route::get('/sentimentos', function () {
    return view('dificuldades/diffRosa');
})->name('pink');

Route::get('/higiene', function () {
    return view('dificuldades/diffVerde');
})->name('green');

Route::get('/quiz/empatia', function () {
    return view('quiz/empatia');
})->name('quizAzul');

Route::get('/quiz/cotidiano', function () {
    return view('quiz/cotidiano');
})->name('quizAmarelo');

Route::get('/quiz/sentimentos', function () {
    return view('quiz/sentimentos');
})->name('quizRosa');

Route::get('/quiz/higiene', function () {
    return view('quiz/higiene');
})->name('quizVerde');

Route::get('/explicacao', function () {
    return view('quiz/explicacaoResposta');
})->name('explanation');

Route::get('/pontuacao', function () {
    return view('quiz/pontuacao');
})->name('pontuacao');

Route::get('/jogar', [PlayController::class, 'startNewGame'])->name('play');
Route::get('/quiz', [RetrieveQuestionController::class, 'retrieve'])->name('retrieveQuestion');
Route::get('/verifica/{id}', [VerifyAlternativeController::class, 'verify'])->name('verifyAlternative');
Route::get('/finaliza', [PlayController::class, 'endGame'])->name('endGame');

Route::middleware('auth')->group(function () {
    Route::get('/cadastro-perguntas', [RegisterQuestionController::class, 'create'])->name('questionRegister');
    Route::post('/cadastro-perguntas', [RegisterQuestionController::class, 'store'])->name('questionRegister');
});
    
require __DIR__.'/auth.php';