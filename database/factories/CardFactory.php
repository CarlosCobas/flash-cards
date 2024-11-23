<?php

namespace Database\Factories;

use App\Models\Subject;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Date;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question' => fake()->sentence(),
            'answer' => fake()->sentence(),
            'interval' => 1,
            'e_factor' => 2.5,
            'last_show_date' => null,
            'next_show_date' => Date::now(),
            'user_id' => User::factory(),
            'topic_id' => Topic::factory(),
        ];
    }
}
