<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceTabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
           
                'name' => 'Ganti Oli',
                'description' => 'ganti-oli',
                'price' => 50000,
                'image' => 'img/service-1.jpg',
            ]
        ];
        
        foreach ($services as $key => $service) {
            Service::create($service);
        }
    }
}
