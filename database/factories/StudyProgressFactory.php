<?php

namespace Database\Factories;

use App\Models\Card;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StudyProgress>
 */
class StudyProgressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'interval' => 0,
            'e_factor' => 2.5,
            'next_date_to_show' => Carbon::now(),
            'card_id' => Card::factory()
        ];
    }
}
