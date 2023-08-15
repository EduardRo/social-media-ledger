<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Fund;
use App\Models\FundAdministrator;

class FundFactory extends Factory
{
    protected $model = Fund::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'category' => $this->faker->company,
            'fund_administrator_id' => FundAdministrator::factory(),
            'phone' => $this->faker->phoneNumber,
            'contact_person' => $this->faker->name,
            'email' => $this->faker->email,
        ];
    }
}
