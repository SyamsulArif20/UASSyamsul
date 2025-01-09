<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Driver;
use Faker\Factory as Faker;

class DriverSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Membuat 100 data dummy untuk Driver
        for ($i = 0; $i < 100; $i++) {
            Driver::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'license_number' => $faker->unique()->bothify('??###??'), // Menghasilkan license_number yang unik
            ]);
        }
    }
}