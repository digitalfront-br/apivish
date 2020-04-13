<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Autor;
use Faker\Generator as Faker;

$factory->define(Autor::class, function (Faker $faker) {
    return [
        "autor" =>  $faker->firstName. ' ' . $faker->lastName . ' ' . $faker->lastName,
        'bio'   =>  $faker->paragraph(20),
        'capa'  =>  'https://picsum.photos/seed/picsum/900/' . rand(900, 930),
        'mini'  =>  'https://picsum.photos/seed/picsum/300/' . rand(300, 330),
    ];
});
