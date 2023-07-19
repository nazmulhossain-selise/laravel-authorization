<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = Question::factory(20)->create();
        $questions->each(function ($question) {
            Answer::factory(rand(1,8))->create([
                'question_id' => $question->id
            ]);
        });

        $questions = Question::factory(3)->create(["user_id" => 1]);
        $questions->each(function ($question) {
            Answer::factory(rand(1,8))->create([
                'question_id' => $question->id
            ]);
        });
    }
}
