<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::orderBy('created_at', 'DESC')->paginate(10);
    
        return view('dashboard', compact('questions'));
    }

    public function show($questionId)
    {
        $question = Question::findOrFail($questionId);
        
        return view('question', compact('question'));
    }
}
