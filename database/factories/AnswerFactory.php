<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Answer>
 */
class AnswerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $question_id = Question::pluck('id')->random();

        $question = Question::find($question_id);

        //pick another random user for the answer
        $user_id = User::pluck('id')->except($question->user_id)->random();

        return [
            'user_id' => $user_id,
            'question_id' => $question_id,
            'answer' => fake()->paragraph(),
            'is_correct' => false,
        ];
    }
}
