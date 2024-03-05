<?php

namespace Database\Seeders;
use App\Models\Fry;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class FrySeeder extends Seeder
{
    public function run()
    {
        $fries = [
            [
                'name' => 'Regular Fries',
                'description' => 'Classic crispy fries',
                'price_small' => 2.50,
                'price_regular' => 3.50,
                'price_large' => 4.50,
            ],
            // Add more fries here
        ];

        foreach ($fries as $fry) {
            Fry::create($fry);
        }
    }
}