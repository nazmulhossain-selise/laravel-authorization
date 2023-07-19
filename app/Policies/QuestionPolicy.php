<?php

namespace App\Policies;

use App\Models\Question;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class QuestionPolicy
{
    /**
     * Determine whether the user can view any models.
     */

    // public function before(User $user)
    // {
    //     if($user->id == 1){
    //         return true;
    //     }
    // }


    public function update(User $user, Question $question): bool
    {
        return $user->id == $question->user_id;
    }

}
