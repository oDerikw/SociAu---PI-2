<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alternative;
use App\Models\Question;
use Illuminate\Support\Facades\DB;

class RegisterQuestionController extends Controller
{
    public function create()
    {
        return view('addPerguntas');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'question' => 'required',
            'explanation' => 'required',
            'image' => 'required',
            'alt1' => 'required',
            'alt2' => 'required',
            'alt3' => 'required',
            'alt4' => 'required',
            'alt5' => 'required',
        ]);

        Question::create([
            'category' => $request->category,
            'question' => $request->question,
            'explanation' => $request->explanation,
            'image' => $request->image,
            'user_id' => auth()->user()->id,
        ]);

        $question_id = DB::table('questions')->latest()->first(['id'])->id;

        Alternative::create([
            'alternative' => $request->alt1,
            'isCorrect' => $request->isCorrect1 ?? '0',
            'question_id' => $question_id,
        ]);
        Alternative::create([
            'alternative' => $request->alt2,
            'isCorrect' => $request->isCorrect2 ?? '0',
            'question_id' => $question_id,
        ]);
        Alternative::create([
            'alternative' => $request->alt3,
            'isCorrect' => $request->isCorrect3 ?? '0',
            'question_id' => $question_id,
        ]);
        Alternative::create([
            'alternative' => $request->alt4,
            'isCorrect' => $request->isCorrect4 ?? '0',
            'question_id' => $question_id,
        ]);
        Alternative::create([
            'alternative' => $request->alt5,
            'isCorrect' => $request->isCorrect5 ?? '0',
            'question_id' => $question_id,
        ]);

        return redirect()->route('questionRegister');
    }
}
