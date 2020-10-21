<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Teacher;
use Faker\Generator as Faker;

$factory->define(\App\Teacher::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'salary'=>$faker->randomFloat(),
        'department_id'=>\App\Department::all()->random()
    ];
});
