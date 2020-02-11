<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Member::class, function (Faker $faker) {
    return [
        "member_name"=>$faker->unique()->name,
        "password"=>$faker->password,
        "email"=>$faker->email,
        "phoneNumber"=>$faker->phoneNumber,
        "birthday"=>$faker->date()
    ];
});
