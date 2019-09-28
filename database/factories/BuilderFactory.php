<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Builder;
use Faker\Generator as Faker;

$factory->define(Builder::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'logo' => $faker->sentence,
        'description' => $faker->text,
        'user_id' => function() {
          return App\User::all()->random();
        }
    ];
});
