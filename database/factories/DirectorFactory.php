<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Director;
use Faker\Generator as Faker;

$factory->define(Director::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'image' => 'images/peele.jpg',
        'bio' => $faker->text(),
    ];
});
