<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\Session;

class RetrieveQuestionController extends Controller
{
    public function retrieve()
    {   
        // Seleciona uma questão aleatória com base na categoria selecionada
        $category = Session::get('category');
        $difficulty = Session::get('difficulty');
        $query_question = Question::where('category', $category)->limit(5)->get(['id', 'question', 'explanation', 'image']);

        if (!Session::exists('retrieved'))
        {
            Session::put('retrieved', true);

            foreach($query_question as $question)
                Session::push('questions', $question);

            switch ($difficulty)
            {
                case 'facil':
                    foreach ($query_question as $question)
                        Session::push('alternatives', $this->queryAlternatives($question->id, 1, 1));
                    break;
                    
                case 'medio':
                    foreach ($query_question as $question)
                        Session::push('alternatives', $this->queryAlternatives($question->id, 2, 2));
                    break;
                    
                case 'dificil':
                    foreach ($query_question as $question)
                        Session::push('alternatives', $this->queryAlternatives($question->id, 3, 1));
                    break;
            }

            $query_question = NULL;

        }
        return view('quiz/'.$category);
    }
    
    private function queryAlternatives($question_id, $qt_incorrect, $qt_correct)
    {
        $alternatives = [];
        
        // Seleciona alternativas incorretas aleatórias com base no id da questão
        $query_incorrect_alt = Alternative::where([
            ['question_id', '=', $question_id],
            ['isCorrect', '=', 0]
        ])->limit($qt_incorrect)->inRandomOrder()->get(['id', 'alternative']);

        // Seleciona uma alternativa correta aleatória com base no id da questão
        $query_correct_alt = Alternative::where([
            ['question_id', '=', $question_id],
            ['isCorrect', '=', 1]
        ])->limit($qt_correct)->inRandomOrder()->get(['id', 'alternative']);

        foreach ($query_incorrect_alt as $incorrect_alt)
            array_push($alternatives, $incorrect_alt);

        foreach ($query_correct_alt as $correct_alt)
            array_push($alternatives, $correct_alt);

        $query_incorrect_alt = $query_correct_alt = NULL;

        return $alternatives;
    }
}
