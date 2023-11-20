<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('schools')->insert([
                'name' => $faker->name,
                'rede' => $faker->randomElement(['Particular', 'Publica']),
                'nivel' => $faker->randomElement(['Fundamental', 'Médio', 'Faculdade']),
                'country' => $faker->country,
                'state' => $faker->state,
                'city' => $faker->city,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        
    }
}