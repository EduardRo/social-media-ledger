<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Creation>
 */
class CreationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text,
            'description' => $this->faker->paragraph,
            'src' => $this->faker->url,
            'time_of_the_event' => $this->faker->dateTime,
            'media_platform' => $this->faker->text,
            'type_of_event' => $this->faker->name

        ];
    }
}
