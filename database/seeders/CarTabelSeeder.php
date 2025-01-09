<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cars =[
            [
                'name' => 'Avanza',
                'image' => 'https://toyotapedia.com/wp-content/uploads/2022/02/5-avanza-white.png'
            ]
            ];

            foreach ($cars as $key => $car) {
                Car::create($car);
            }
    }
}
