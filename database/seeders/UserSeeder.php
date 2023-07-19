<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'id' => 1,
            'name' => 'Nihal',
            'email' => 'nh@selise.ch',
            'password' => Hash::make('nihal2009'),
        ]);

        \App\Models\User::factory(5)->create();
    }
}
