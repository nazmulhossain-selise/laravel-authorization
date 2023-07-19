<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    //user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //question
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
