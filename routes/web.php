<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pizzas', function () {

  $pizzas = [
    ['type' => 'hawaiian', 'base' => 'cheesy crust'],
    ['type' => 'volcano', 'base' => 'garlic crust'],
    ['type' => 'veg supreme', 'base' => 'thin & crispy']
  ];

  $name = request('name');


    return view('pizzas', [
        'pizzas' => $pizzas,
        'name' => $name,
    ]);
});

Route::get('/pizzas/{id}', function ($id) {

    return view('details', ['id' => $id]);
});

Route::apiResource('toppings', ToppingController::class);