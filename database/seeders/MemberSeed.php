<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        
        DB::table('members')->insert([
            'name'      => $faker->name(),
            'nickname' => $faker->firstName(),
            'email'     => $faker->safeEmail(),
            'phone'     => $faker->phoneNumber(),
            'birth_date'=> $faker->date(),
            'gender'    => $faker->randomElement(['M', 'F']),
            'comments'  => $faker->text(),
            'enabled'   => $faker->randomElement([1, 0])
        ]);
    }
}
