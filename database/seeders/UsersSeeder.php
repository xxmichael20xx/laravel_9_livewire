<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1, 10) as $num) {
            User::create([
                'name' => $faker->name(),
                'email' => $faker->safeEmail(),
                'password' => bcrypt('Password'.$num)
            ]);
        }
    }
}
