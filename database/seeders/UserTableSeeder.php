<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $faker = \Faker\Factory::create();

        //seeder usuario administrativo
        $password = Hash::make('adm@123');
        User::create([
            'name' => 'adm',
            'email' => 'adm@email.com',
            'password' => $password
        ]);

        //Seeder usuarios aleatoris
        for($i = 0; $i < 10; $i++){
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password
            ]);
        }
    }
}
