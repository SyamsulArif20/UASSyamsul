<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CustomerSeeder::class,
            DriverSeeder::class,
            PackageSeeder::class,
            BranchSeeder::class,
            TransactionSeeder::class,
            UsersSeeder::class,
        ]);
    }
}