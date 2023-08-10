<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FundAdministrator>
 */
class FundAdministratorFactory extends Factory
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
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'address' => $this->faker->address(),
            'contact_person' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email,
            'administrator_name' => $this->faker->firstName,
            'administrator_surname' => $this->faker->lastName,
            'administrator_phone' => $this->faker->phoneNumber(),
            'administrator_email' => $this->faker->email()



        ];
    }
}
