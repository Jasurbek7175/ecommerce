<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $admin = User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'phone' => '+999999999999',
            'email' => 'admin@ecom.uz',
            'password' => Hash::make('secret123')
        ]);

        $admin->roles()->attach(1);

        $admin = User::create([
            'first_name' => 'Fazliddin',
            'last_name' => 'Qobilov',
            'email' => 'fazliddin11@gmail.com',
            'phone' => '+999998999',
            'password' => Hash::make('secret123'),
        ]);
        $admin->roles()->attach(2);

        User::factory()->count(10)->hasAttached([Role::find(2)])->create();


    }
}
