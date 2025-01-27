<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
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
            'status' => fake()->randomElement(['confirmed', 'pending', 'cancelled']),
            'check_in' => fake()->dateTime(),
            'check_out' => fake()->dateTime(),
            'amount' => fake()->numberBetween(1, 5),
            'booking_date' => fake()->date,
            'payment_date' => fake()->date,
        ];
    }
}
