<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $schoolIds = DB::table('schools')->pluck('id')->toArray();

        foreach ($schoolIds as $schoolId) {

            for ($j = 0; $j < 10; $j++) {
                DB::table('students')->insert([
                    'school_id' => $schoolId,
                    'name' => $faker->name,
                    'birth' => $faker->date,
                    'sex' => $faker->randomElement(['Male', 'Female']),
                    'cpf' => $faker->numerify('###########'),
                    'country' => $faker->country,
                    'state' => $faker->state,
                    'city' => $faker->city,
                    'biography' => $faker->text,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}