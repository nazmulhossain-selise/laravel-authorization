<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    //mark as correct 
    public function correct($answerId)
    {
        $answer = Answer::findOrFail($answerId);

        $answer->is_correct = true;

        $answer->save();

        return back();
    }

    //mark as the best answer
    public function best($answerId)
    {
        $answer = Answer::findOrFail($answerId);

        $question = Question::findOrFail($answer->question_id);

        
        $question->best_answer_id = $answer->id;
        $question->save();

        return back();
    }
}
