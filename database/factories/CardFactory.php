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
            'user_id' => User::find(1),
            'topic_id' => Topic::factory(),
        ];
    }
}
