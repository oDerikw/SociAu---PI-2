<?php

namespace App\Http\Controllers;

use App\Models\Alternative;
use Illuminate\Http\Request;
use App\Models\Question;

class RetrieveQuestionController extends Controller
{
    private $accepted_categories = ['empatia', 'cotidiano', 'sentimentos', 'higiene'];
    private $accepted_difficulties = ['facil', 'medio', 'dificil'];

    public function retrieve(Request $request, $category, $difficulty)
    {
        if (!$this->validateRequestArguments($category, $difficulty)) 
        {
            $request->session()->forget('category', 'difficulty', 'incorrect_answers', 'correct_answers');
            return redirect('jogar');
        }
        
        $session_setted = $request->session()->has('category') && 
                          $request->session()->has('difficulty') && 
                          $request->session()->has('incorrect_answers') && 
                          $request->session()->has('correct_answers');
                           
        // Armazena os dados em uma sessão para garantir acesso aos controllers
        if (!$session_setted)
        {
            session([
                'category' => $category, 
                'difficulty' => $difficulty,
                'incorrect_answers' => 0,
                'correct_answers' => 0,        
            ]);
        }

        // Seleciona uma questão aleatória com base na categoria selecionada
        $query_question = Question::where('category', $category)->inRandomOrder()->get(['id', 'question', 'explanation', 'image']);
        
        switch ($difficulty)
        {
            case 'facil':
                $alternatives = $this->queryAlternatives($query_question[0]->id, 1, 1);
                break;
                
            case 'medio':
                $alternatives = $this->queryAlternatives($query_question[0]->id, 2, 2);
                break;
                
            case 'dificil':
                $alternatives = $this->queryAlternatives($query_question[0]->id, 3, 1);
                break;
        }

        // Embaralha as alternativas
        shuffle($alternatives);
                
        $data = [
            'question' => $query_question[0]->question,
            'explanation' => $query_question[0]->explanation,
            'image' => $query_question[0]->image,
            'alternatives' => $alternatives,
        ];
        $query_question = NULL;

        return view('quiz/'.$category, $data);
    }

    private function validateRequestArguments($category, $difficulty)
    {
        if (in_array($category, $this->accepted_categories, true) and in_array($difficulty, $this->accepted_difficulties, true))
        {
            return true;
        }
        return false;
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
