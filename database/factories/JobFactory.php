<?php

use Faker\Generator as Faker;

$factory->define(\App\job::class, function (Faker $faker) {
    return [
        'title' => $faker->jobTitle,
        'company_name' => $faker->name,

    ];
});
