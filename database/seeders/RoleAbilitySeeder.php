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
            'name' => 'mark_as_best',
            'label' => 'Mark any answer as the best answer',
        ]);

        //Assign ability to role
        $admin->allowTo($markAsBest);

        //User role
        $user = \App\Models\User::find(1);
        $user->assignRole($admin);  
    }
}
