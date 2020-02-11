<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Donate::class, function (Faker $faker) {
    return [
        "cause_id"=>$faker->numberBetween(1,4),
        "member_id"=>$faker->numberBetween(1,100),
        "member_name"=>$faker->name,
        "donater_money"=>$faker->numberBetween(0,1000)
    ];
});
