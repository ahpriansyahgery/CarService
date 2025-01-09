<?php

namespace Database\Seeders;

use App\Models\Mechanic;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MechanicTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mechanics = [
            [
                'name' => 'Daud',
                'expert' => 'Ganti Oli',
                'image' => 'img/team-1.jpg',
                'price' => 20000
            ]
        ];

        foreach ($mechanics as $key => $mechanic) {
            Mechanic::create($mechanic);
        }

    }
}
