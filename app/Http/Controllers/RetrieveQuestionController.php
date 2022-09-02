<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;
use App\Models\Question;

class RetrieveQuestionController extends Controller
{
    private $accepted_categories = ['empatia', 'cotidiano', 'sentimentos', 'higiene'];
    private $accepted_difficulties = ['facil', 'medio', 'dififcil'];

    public function retrieve($category, $difficulty)
    {
        if ($this->validateRequestArguments($category, $difficulty)) { return redirect('jogar'); }

        // Seleciona uma questão aleatória com base na categoria selecionada
        $query_question = Question::where('category', $category)->inRandomOrder()->get(['id', 'question', 'explanation', 'image']);

        switch ($difficulty)
        {
            case 'facil':
                // Seleciona alternativas incorretas aleatórias com base no id da questão
                $query_alt_incorrect = Alternative::where([
                    ['question_id', '=', $query_question[0]->id],
                    ['isCorrect', '=', 0]
                ])->limit(1)->inRandomOrder()->get(['id', 'alternative']);

                // Seleciona uma alternativa correta aleatória com base no id da questão
                $query_alt_correct = Alternative::where([
                    ['question_id', '=', $query_question[0]->id],
                    ['isCorrect', '=', 1]
                ])->limit(1)->inRandomOrder()->get(['id', 'alternative']);

                $alternatives = [
                    $query_alt_incorrect[0],
                    $query_alt_correct[0],
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

                return view('quiz/'.$category , $data);
            case 'medio':
                // Seleciona alternativas incorretas aleatórias com base no id da questão
                $query_alt_incorrect = Alternative::where([
                    ['question_id', '=', $query_question[0]->id],
                    ['isCorrect', '=', 0]
                ])->limit(2)->inRandomOrder()->get(['id', 'alternative']);

                // Seleciona uma alternativa correta aleatória com base no id da questão
                $query_alt_correct = Alternative::where([
                    ['question_id', '=', $query_question[0]->id],
                    ['isCorrect', '=', 1]
                ])->limit(2)->inRandomOrder()->get(['id', 'alternative']);

                $alternatives = [
                    $query_alt_incorrect[0],
                    $query_alt_incorrect[1],
                    $query_alt_correct[0],
                    $query_alt_correct[1],
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

                return view('quiz/'.$category, $data);
            case 'dificil':
                // Seleciona alternativas incorretas aleatórias com base no id da questão
                $query_alt_incorrect = Alternative::where([
                    ['question_id', '=', $query_question[0]->id],
                    ['isCorrect', '=', 0]
                ])->limit(3)->inRandomOrder()->get(['id', 'alternative']);

                // Seleciona uma alternativa correta aleatória com base no id da questão
                $query_alt_correct = Alternative::where([
                    ['question_id', '=', $query_question[0]->id],
                    ['isCorrect', '=', 1]
                ])->limit(1)->inRandomOrder()->get(['id', 'alternative']);

                $alternatives = [
                    $query_alt_incorrect[0],
                    $query_alt_incorrect[1],
                    $query_alt_incorrect[2],
                    $query_alt_correct[0],
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
                return view('quiz/'.$category, $data);
        }
    }

    private function validateRequestArguments($category, $difficulty)
    {
        if (in_array($category, $this->accepted_categories, true) and in_array($difficulty, $this->accepted_difficulties, true))
        {
            return false;
        }
        return true;
    }
}
