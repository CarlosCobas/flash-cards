<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\StudyProgress;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Card::factory(30)->create();
        StudyProgress::factory(30)->create();
    }
}
