<?php

namespace Database\Seeders;
use App\Models\Drink;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    public function run()
    {
        $drinks = [
            [
                'name' => 'Coca-Cola',
                'description' => 'Refreshing Coca-Cola',
                'price_small' => 1.50,
                'price_regular' => 2.00,
                'price_large' => 2.50,
            ],
            [
                'name' => 'Coke Zero',
                'description' => 'Refreshing Coke Zero',
                'price_small' => 1.50,
                'price_regular' => 2.00,
                'price_large' => 2.50,
            ],
            [
                'name' => 'Diet Coke',
                'description' => 'Refreshing Diet Coke',
                'price_small' => 1.50,
                'price_regular' => 2.00,
                'price_large' => 2.50,
            ],
            [
                'name' => 'Sprite',
                'description' => 'Refreshing Sprite',
                'price_small' => 1.50,
                'price_regular' => 2.00,
                'price_large' => 2.50,
            ],
            [
                'name' => 'Dr. Pepper',
                'description' => 'Refreshing Dr. Pepper',
                'price_small' => 1.50,
                'price_regular' => 2.00,
                'price_large' => 2.50,
            ],
            [
                'name' => 'Fresca',
                'description' => 'Refreshing Fresca',
                'price_small' => 1.50,
                'price_regular' => 2.00,
                'price_large' => 2.50,
            ],
            [
                'name' => 'Orange Crush',
                'description' => 'Refreshing Orange Crush',
                'price_small' => 1.50,
                'price_regular' => 2.00,
                'price_large' => 2.50,
            ],
            
        ];

        foreach ($drinks as $drink) {
            Drink::create($drink);
        }
    }
}