<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\KhuyenMai;
use Faker\Generator as Faker;

$factory->define(KhuyenMai::class, function (Faker $faker) {
    $startTime = $faker->dateTimeThisYear;
    return [
        'thoi_gian_bat_dau' => $startTime, 
        'thoi_gian_ket_thuc' => $faker->dateTimeBetween($startTime), 
        'muc_giam' => $faker->numberBetween(1, 10)*5,
    ];
});
