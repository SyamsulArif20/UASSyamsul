<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
use App\Models\Driver; // Pastikan untuk mengimpor model Driver
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Ambil semua ID driver yang valid
        $driverIds = Driver::pluck('id')->toArray();

        // Membuat 100 data dummy untuk Transaction
        for ($i = 0; $i < 100; $i++) {
            Transaction::create([
                'customer_id' => $faker->numberBetween(1, 100), // Pastikan ID pelanggan valid
                'package_id' => $faker->numberBetween(1, 100), // Pastikan ID paket valid
                'driver_id' => $faker->randomElement($driverIds), // Menggunakan ID driver yang valid
                'branch_id' => $faker->numberBetween(1, 100), // Menambahkan branch_id
                'amount' => $faker->randomFloat(2, 10, 500), // Menghasilkan jumlah acak
            ]);
        }
    }
}