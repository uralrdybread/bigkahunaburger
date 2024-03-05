<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ToppingSeeder::class);
        $this->call(BurgerSeeder::class);
        $this->call(DrinkSeeder::class);
        $this->call(FrySeeder::class);
    }
}
