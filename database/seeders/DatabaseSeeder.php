<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategorySeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            AttributeSeeder::class,
            ValueSeeder::class,
            ProductSeeder::class,
            PaymentTypeSeeder::class,
            DeliveryMethodSeeder::class
        ]);
    }
}
