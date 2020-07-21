<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        //
        'task' => $faker->sentence(7),
        'user_id' => User::all()->random()->id,

    ];
});
