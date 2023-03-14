<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//models
use App\Models\Train;

//helpers
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $newTrain = new Train;
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            //ciclo while per evitare doppioni
            $newTrain->departure_time = $faker->dateTimeBetween("-1 week", "+1 week");
            $newTrain->arrival_time = $faker->dateTimeBetween("+1 week", "+2 week");
            $newTrain->code = $faker->bothify("??##??");
            $newTrain->carriages = $faker->numberBetween(2, 12);
            $newTrain->on_time = $faker->boolean();
            $newTrain->deleted = $faker->boolean();

            $newTrain->save();
        }
    }
}
