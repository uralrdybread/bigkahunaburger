<?php

namespace Database\Seeders;
use App\Models\Burger;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BurgerSeeder extends Seeder
{
    public function run()
    {
        $burgers = [
            [
                'name' => 'Big Kahuna Burger',
                'description' => 'The legendary burger that put Big Kahuna Burger on the map. Savor the taste with grilled pineapple, crispy bacon, cheddar cheese, lettuce, and our special sauce.',
                'price' => 13.50,
            ],
            [
                'name' => 'Island Fiesta Burger',
                'description' => 'Experience a fiesta of flavors with Hawaiian salsa, teriyaki-glazed grilled onions, macadamia nut crumble, lettuce, and crunchy coconut.',
                'price' => 11.75, // Adjust the price based on toppings
            ],
            [
                'name' => 'Tropical Teriyaki Burger',
                'description' => 'Tantalize your taste buds with teriyaki-glazed grilled onions, grilled pineapple, lettuce, cheddar cheese, and teriyaki-glazed grilled portobello mushrooms.',
                'price' => 12.25, 
            ],
            [
                'name' => 'Papaya Paradise Burger',
                'description' => 'Escape to paradise with papaya slices, grilled pineapple, lettuce, sweet chili glazed bacon, and kimchi slaw.',
                'price' => 11.50, 
            ],
            [
                'name' => 'Sunset Surf Burger',
                'description' => 'Ride the waves of flavor with grilled pineapple, teriyaki-glazed grilled spam slices, lettuce, pickled jalapenos, and Hawaiian salsa.',
                'price' => 12.00, 
            ],
            [
                'name' => 'Volcano Veggie Burger',
                'description' => 'Experience an eruption of flavor with grilled portobello mushrooms, avocado, lettuce, teriyaki-glazed grilled onions, and mango sriracha.',
                'price' => 12.25, 
            ],
            [
                'name' => 'Luau Bacon BBQ Burger',
                'description' => 'Savor the taste of the islands with sweet chili glazed bacon, grilled pineapple, lettuce, teriyaki-glazed grilled onions, and teriyaki BBQ sauce.',
                'price' => 11.75, 
            ],
        ];

        foreach ($burgers as $burger) {
            Burger::create($burger);
        }
    }
}
