<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'nom' => $faker->name,
        'prix' => $faker->numberBetween(1,777),
        'description' => $faker->realText(200),
    ];
});
