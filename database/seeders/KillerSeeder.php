<?php

namespace Database\Seeders;

use App\Models\Killer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class KillerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 12; $i++) {
            $killer = new Killer();

            $killer->first_name = $faker->firstName();
            $killer->last_name = $faker->lastName();
            $killer->age = $faker->numberBetween(16, 90);
            $killer->kills = $faker->numberBetween(3, 50);
            $killer->wanted = $faker->boolean();
            $killer->picture = $faker->imageUrl(640, 480);

            $killer->save();
        }
    }
}
