<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'excerpt' => $faker->sentence($nbWords = 12),
        'body' => $faker->paragraph(3),
        'photo_url' => $faker->imageUrl($width = 640, $height = 480, 'dog')
    ];
});
