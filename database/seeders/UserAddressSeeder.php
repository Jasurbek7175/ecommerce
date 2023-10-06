<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::find(2)->addresses()->create([
            "latitude" => "41.310014",
            "longitude" => "69.280742",
            "region" => "Tashkent",
            "district" => "Mirabad Tuman",
            "street" => "Mingurik Mahallah",
            "home" => "777",
        ]);

        User::find(2)->addresses()->create([
            "latitude" => "41.310014",
            "longitude" => "69.280742",
            "region" => "Tashkent",
            "district" => "Mirzo. U Tuman",
            "street" => "Navbahor Mahallah",
            "home" => "123",
        ]);
    }
}
