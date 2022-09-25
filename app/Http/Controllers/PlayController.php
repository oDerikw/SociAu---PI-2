<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RetrieveQuestionController;

class PlayController extends Controller
{
    private $accepted_categories = ['empatia', 'cotidiano', 'sentimentos', 'higiene'];
    private $accepted_difficulties = ['facil', 'medio', 'dificil'];
    
    public function startNewGame(Request $request)
    {
        $category = $request->category;
        $difficulty = $request->difficulty;

        if ($this->validateRequestArguments($category, $difficulty))
        {
            session([
                'status' => 'started',
                'category' => $category,
                'difficulty' => $difficulty,
                'explanation' => '',
                'correct_answers' => 0,
                'incorrect_answers' =>  0,
            ]);
        }
        else
        {
            return redirect()->route('choose_category');
        }

        return redirect()->action([RetrieveQuestionController::class, 'retrieve']);
    }

    public function endGame(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('choose_category');
    }

    private function validateRequestArguments($category, $difficulty)
    {
        if (in_array($category, $this->accepted_categories, true) and in_array($difficulty, $this->accepted_difficulties, true))
        {
            return true;
        }
        return false;
    }
}
