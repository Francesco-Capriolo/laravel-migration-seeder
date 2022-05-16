<?php

use App\trains;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50 ; $i++) {
            $newTrain = new trains();
            $newTrain -> companyName =  $faker->word ();
            $newTrain -> departureStation = $faker -> city ();
            $newTrain -> arrivalStation = $faker -> city ();
            $newTrain -> departureTime =  $faker->dateTime();
            $newTrain -> arrivalTime = $faker->dateTime();
            $newTrain -> trainCode= $faker->randomNumber(6, true);
            $newTrain -> coaches= $faker->numberBetween(11, 15);
            $newTrain -> onTime= $faker->boolean();
            $newTrain -> cancelled = $faker->boolean();
            $newTrain -> save();
        }
    }
}
