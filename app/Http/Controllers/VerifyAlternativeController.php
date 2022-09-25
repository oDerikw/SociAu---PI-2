<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternative;
use App\Models\Question;

class VerifyAlternativeController extends Controller
{
    private $_MAX_QUESTIONS_PER_PLAY = 5;
    
    public function verify(Request $request, $alternative_id)
    {
        if ($request->session()->get('status') == 'started')
        {
            $query_alternative = Alternative::where('id', $alternative_id)->get(['isCorrect', 'question_id']);
            $query_question = Question::where('id', $query_alternative[0]->question_id)->get(['explanation']);
        
            if ($query_alternative[0]->isCorrect)
                $request->session()->increment('correct_answers');
            else
                $request->session()->increment('incorrect_answers');
                
            if (($request->session()->get('incorrect_answers') + $request->session()->get('correct_answers')) >= $this->_MAX_QUESTIONS_PER_PLAY)
                return redirect()->route('pontuacao');

            if (!$query_alternative[0]->isCorrect)
            {
                $request->session()->forget('explanation');
                $request->session()->put('explanation', $query_question[0]->explanation);
                return redirect()->route('explanation');
            }
            return redirect()->route('retrieveQuestion');
        }
    }
}
