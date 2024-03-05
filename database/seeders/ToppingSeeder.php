<?php

namespace Database\Seeders;
use App\Models\Topping;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ToppingSeeder extends Seeder
{
    public function run()
    {
        $toppings = [
    ['name' => 'Papaya slices', 'price' => 0.75],
    ['name' => 'Avocado', 'price' => 1.50],
    ['name' => 'Grilled Pineapple', 'price' => 0.75],
    ['name' => 'Onions', 'price' => 0.50],
    ['name' => 'Teriyaki-glazed grilled onions', 'price' => 0.75],
    ['name' => 'Macadamia nut crumble', 'price' => 1.00],
    ['name' => 'Grilled Spam slices', 'price' => 1.25],
    ['name' => 'Lettuce', 'price' => 0.25],
    ['name' => 'Sweet chili glazed bacon', 'price' => 1.50],
    ['name' => 'Grilled portobello mushrooms', 'price' => 1.25],
    ['name' => 'Cheddar Cheese', 'price' => 0.75],
    ['name' => 'Pickled jalapenos', 'price' => 0.50],
    ['name' => 'Crunchy Coconut', 'price' => 0.75],
    ['name' => 'Hawaiian Salsa', 'price' => 0.75],
    ['name' => 'Mango sriracha', 'price' => 0.75],
    ['name' => 'Kimchi slaw', 'price' => 1.00],
];

        foreach ($toppings as $topping) {
            Topping::create($topping);
        }
    }
}