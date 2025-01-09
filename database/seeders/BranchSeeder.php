<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Branch;
use Faker\Factory as Faker;

class BranchSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Branch::create([
                'name' => $faker->company,
                'location' => $faker->address,
            ]);
        }
    }
}