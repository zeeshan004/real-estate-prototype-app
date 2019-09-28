<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Property;
use App\Model\Category;
use Faker\Generator as Faker;

$factory->define(Property::class, function (Faker $faker) {
  $title = $faker->sentence;
  return [
      'title' => $title,
      'slug' => str_slug($title),
      'category_id'=> function(){
        return Category::all()->random();
      },
      'logo' => $faker->sentence,
      'description' => $faker->text,
      'builder_id' => function() {
        return \App\Model\Builder::all()->random();
      }

    ];
});
