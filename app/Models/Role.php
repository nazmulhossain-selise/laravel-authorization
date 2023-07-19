<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    //abilities
    public function abilities()
    {
        return $this->belongsToMany(Ability::class)->withTimestamps();
    }

    //allow to ability
    public function allowTo(Ability $ability)
    {
        return $this->abilities()->save($ability);
    }
}
