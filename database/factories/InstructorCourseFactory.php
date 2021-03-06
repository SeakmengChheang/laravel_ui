<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\InstructorCourse;
use Faker\Generator as Faker;

$factory->define(InstructorCourse::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->numberBetween(1, 5),
        'course_id'=>$faker->numberBetween(1, 5),
    ];
});
