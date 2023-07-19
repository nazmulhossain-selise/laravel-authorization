<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AnswerController extends Controller
{
    //mark as correct 
    public function correct($answerId)
    {
        $answer = Answer::findOrFail($answerId);

        $this->authorize('update', $answer->question);

        $answer->is_correct = true;

        $answer->save();

        return back();
    }

    //mark as the best answer
    public function best($answerId)
    {
        $answer = Answer::findOrFail($answerId);

        $this->authorize('update', $answer->question);

        // if(Gate::denies('update', $answer->question)) {
        //     die("You are not allowed!");
        // }

        $answer->question->best_answer_id = $answer->id;
        $answer->question->save();

        return back();
    }
}
