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
        $query_alternative = Alternative::where('id', $alternative_id)->get(['isCorrect', 'question_id']);
        
        if ($query_alternative[0]->isCorrect) {
            $request->session()->increment('correct_answers', $incrementBy = 1);
        }
        else {
            $query_question = Question::where('id', $query_alternative[0]->question_id)->get(['explanation']);
            $request->session()->increment('incorrect_answers', $incrementBy = 1);
        }

        if (($request->session()->get('incorrect_answers') + $request->session()->get('correct_answers')) >= 5) {
            $request->session()->forget('category', 'difficulty', 'incorrect_answers', 'correct_answers');
            return redirect()->route('pontuacao');
        } else {
            
            return redirect()->route('getCategoryDifficulty', [
                'category' => $request->session()->get('category'),
                'difficulty' => $request->session()->get('difficulty'),
            ]);
        }
        return view('quiz/explicacaoResposta', $query_question[0]);
    }
}
