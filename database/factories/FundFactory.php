<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fund>
 */
class FundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'category' => $this->faker->company,
            'administrator_id' => $this->faker->numberBetween(1, 10),
            'phone' => $this->faker->phoneNumber,
            'contact_person' => $this->faker->name,
            'email' => $this->faker->email,

        ];
    }
}
