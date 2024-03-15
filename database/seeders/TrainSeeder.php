<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;

class TrainSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index){
            Train::create([
                'company' =>$faker->company,
                'departure_station'=>$faker->city,
                'arrival_station'=>$faker->city,
                'departure_time'=>$faker->time('H:i:s'),
                'arrival_time'=>$faker->time('H:i:s'),
                'train_code'=>$faker->unique()->ean8,
                'num_carriages'=>$faker->numberBetween(5, 12),
                'on_time'=>$faker->boolean,
                'cancelled'=>$faker->boolean(10), //10=probabilità che venga cancellato
            ]);
        }
    }
}
