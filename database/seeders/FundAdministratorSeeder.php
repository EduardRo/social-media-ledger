<?php



namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use App\Models\FundAdministrator;
use App\Models\Fund;


class FundAdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FundAdministrator::factory(5)->create()->each(function ($administrator) {
            $administrator->funds()->saveMany(Fund::factory(rand(1, 3))->make());
        });
    }
}
