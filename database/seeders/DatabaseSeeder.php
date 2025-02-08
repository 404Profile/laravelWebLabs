<?php

namespace Database\Seeders;

use App\Models\Interest;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        Photo::factory(30)->create();
        Interest::factory(30)->create();

        User::factory()->withPersonalTeam()->create([
            'name' => 'admin',
            'email' => 'admin@amin.com',
            'password' => Hash::make('password'),
        ]);
    }
}
