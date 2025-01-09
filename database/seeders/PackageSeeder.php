<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;
use Faker\Factory as Faker;

class PackageSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Package::create([
                'description' => $faker->sentence,
                'weight' => $faker->randomFloat(2, 0, 100), // Random weight between 0 and 100
            ]);
        }
    }
}