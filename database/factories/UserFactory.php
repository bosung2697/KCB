<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/


$factory->define(App\User::class, function (Faker $faker) {
    $gender = $faker->randomElements(['male', 'female']);
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'phone'=>$faker->phoneNumber,
        'username'=>$faker->uuid,
        'birth'=>$faker->dateTimeBetween($startDate = '-50 years', $endDate = 'now', $timezone = 'Asia/Seoul'),
        'gender'=>$gender,
        'password' => bcrypt('password'), // secret
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Article::class, function(Faker $faker){
    $date=$faker->dateTimeThisMonth;
    return[
        'title'=>$faker->sentence(),
        'content'=>$faker->paragraph(),
        'created_at'=>$date,
        'updated_at'=>$date,
    ];
});
