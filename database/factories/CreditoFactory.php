<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Credito::class, function (Faker $faker) {
    return [
        'user_id' => User::first()->id,
        'estado' => $faker->randomElement($array = array ('En gestion','Cancelado','Aprobado')),
        'monto' => $faker->numberBetween($min = 500000, $max = 1000000),
        'costo_total' => $faker->numberBetween($min = 500000, $max = 1000000),
        'interes' => $faker->numberBetween($min = 1, $max = 3),
        'cuotas' => $faker->numberBetween($min = 1, $max = 48),
        'primer_vencimiento' => $faker->dateTime($max = 'now', $timezone = null),
        'valor_cuota' => $faker->numberBetween($min = 15000, $max = 20000),
    ];
});