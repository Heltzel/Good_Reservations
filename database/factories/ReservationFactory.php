<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->safeEmail,
            'tel_number' => $this->faker->phoneNumber,
            'res_date' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'table_id' => $this->faker->numberBetween(1, 7),
            'guest_number' => $this->faker->numberBetween(1, 10),
        ];
    }
}
