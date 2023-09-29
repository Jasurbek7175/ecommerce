<?php

namespace Database\Seeders;

use App\Models\PaymentType;
use Faker\Provider\Payment;
use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentType::create([
            'name' =>  [
                 'uz' => 'Naxt',
                 'ru' => 'Наличие'
            ]
        ]);


        PaymentType::create([
            'name' =>  [
                'uz' => 'Terminal',
                'ru' => 'ru Terminal'
            ]
        ]);


        PaymentType::create([
            'name' =>  [
                'uz' => 'Click',
                'ru' => 'ru Click'
            ]
        ]);

        PaymentType::create([
            'name' =>  [
                'uz' => 'Payme',
                'ru' => 'ru Payme'
            ]
        ]);

        PaymentType::create([
            'name' =>  [
                'uz' => 'Uzum',
                'ru' => 'ru Uzum'
            ]
        ]);

    }
}
