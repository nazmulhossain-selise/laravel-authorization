<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAbilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin role
        $admin = \App\Models\Role::create([
            'name' => 'admin',
            'label' => 'Admin',
        ]);

        //Ability to mark any answer as the best answer
        $markAsBest = \App\Models\Ability::create([
            'name' => 'can_update_all_questions',
            'label' => 'Can update all questions in the forum.',
        ]);

        //Assign ability to role
        $admin->allowTo($markAsBest);

        //User role
        $user = \App\Models\User::find(1);
        $user->assignRole($admin);  
    }
}
