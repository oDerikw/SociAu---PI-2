<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;
use App\Models\Question;

class RetrieveQuestionController extends Controller
{
    public function retrieve($category, $difficulty)
    {
        // Seleciona uma questão aleatória com base na categoria selecionada
        $query_question = Question::where('category', $category)->inRandomOrder()->get(['id', 'question', 'explanation', 'image']);

        switch ($difficulty)
        {
            case 'facil':
                // Seleciona alternativas incorretas aleatórias com base no id da questão
                $query_alt_incorrect = Alternative::where([
                    ['question_id', '=', $query_question[0]->id],
                    ['isCorrect', '=', 0]
                ])->limit(1)->inRandomOrder()->get(['alternative', 'isCorrect']);

                // Seleciona uma alternativa correta aleatória com base no id da questão
                $query_alt_correct = Alternative::where([
                    ['question_id', '=', $query_question[0]->id],
                    ['isCorrect', '=', 1]
                ])->limit(1)->inRandomOrder()->get(['alternative', 'isCorrect']);

                $alternatives = [
                    $query_alt_incorrect[0]->alternative,
                    $query_alt_correct[0]->alternative,
                ];
                
                // Embaralha as alternativas
                shuffle($alternatives);
                
                $data = [
                    'question' => $query_question[0]->question,
                    'explanation' => $query_question[0]->explanation,
                    'image' => $query_question[0]->image,
                    'alternatives' => $alternatives,
                ];

                $query_question = $query_alt_incorrect = $query_alt_incorrect = NULL;

                return view('quizAzul', $data);
            case 'medio':
                // Seleciona alternativas incorretas aleatórias com base no id da questão
                $query_alt_incorrect = Alternative::where([
                    ['question_id', '=', $query_question[0]->id],
                    ['isCorrect', '=', 0]
                ])->limit(2)->inRandomOrder()->get(['alternative', 'isCorrect']);

                // Seleciona uma alternativa correta aleatória com base no id da questão
                $query_alt_correct = Alternative::where([
                    ['question_id', '=', $query_question[0]->id],
                    ['isCorrect', '=', 1]
                ])->limit(2)->inRandomOrder()->get(['alternative', 'isCorrect']);

                $alternatives = [
                    $query_alt_incorrect[0]->alternative,
                    $query_alt_incorrect[1]->alternative,
                    $query_alt_correct[0]->alternative,
                    $query_alt_correct[1]->alternative ?? 'Não existe',
                ];
                
                // Embaralha as alternativas
                shuffle($alternatives);
                
                $data = [
                    'question' => $query_question[0]->question,
                    'explanation' => $query_question[0]->explanation,
                    'image' => $query_question[0]->image,
                    'alternatives' => $alternatives,
                ];

                $query_question = $query_alt_incorrect = $query_alt_incorrect = NULL;

                return view('quizAzul', $data);
            case 'dificil':
                // Seleciona alternativas incorretas aleatórias com base no id da questão
                $query_alt_incorrect = Alternative::where([
                    ['question_id', '=', $query_question[0]->id],
                    ['isCorrect', '=', 0]
                ])->limit(3)->inRandomOrder()->get(['alternative', 'isCorrect']);

                // Seleciona uma alternativa correta aleatória com base no id da questão
                $query_alt_correct = Alternative::where([
                    ['question_id', '=', $query_question[0]->id],
                    ['isCorrect', '=', 1]
                ])->limit(1)->inRandomOrder()->get(['alternative', 'isCorrect']);

                $alternatives = [
                    $query_alt_incorrect[0]->alternative,
                    $query_alt_incorrect[1]->alternative,
                    $query_alt_incorrect[2]->alternative,
                    $query_alt_correct[0]->alternative,
                ];
                
                // Embaralha as alternativas
                shuffle($alternatives);
                
                $data = [
                    'question' => $query_question[0]->question,
                    'explanation' => $query_question[0]->explanation,
                    'image' => $query_question[0]->image,
                    'alternatives' => $alternatives,
                ];

                $query_question = $query_alt_incorrect = $query_alt_incorrect = NULL;
                return view('quizAzul', $data);
        }
    }
}
