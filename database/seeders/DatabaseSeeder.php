<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\StudyProgress;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make("Siroppe1520!"),
        ]);

        // Card::factory(30)->create();
        StudyProgress::factory(30)->create();
    }
}
