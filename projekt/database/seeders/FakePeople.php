<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class FakePeople extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,200) as $index){
        DB::table('people')->insert([
            'name' => $faker->firstName,
            'surname' => $faker->lastName,
            'email' => $faker->email,
            'phone' => $faker->e164PhoneNumber,
            'address' => $faker->streetAddress,
            'country' => $faker->country,
        ]);
        }
    }
}
