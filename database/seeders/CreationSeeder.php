<?php

namespace Database\Seeders;

use App\Models\Creation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Creation::factory()->count(10)->create();
    }
}
