<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id' => Client::inRandomOrder()->first()->id,
            'room_id' => Room::inRandomOrder()->first()->id,
            'ratings' => fake()->numberBetween(1, 5),
        ];
    }
}
