<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i=0; $i < 5; $i++) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'address' => $faker->address,
                'classroom_id' => 2,
            ]);
        }
        for ($i=0; $i < 5; $i++) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'address' => $faker->address,
                'classroom_id' => 3,
            ]);
        }
    }
}
