<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\DoanhNghiep;
use Faker\Generator as Faker;

$factory->define(DoanhNghiep::class, function (Faker $faker) {
    return [
        'ten' => $faker->company,
        'tru_so' => generateAddress($faker), 
        'so_dien_thoai' => generatePhoneNumber($faker),
        'email' => $faker->unique()->companyEmail,
    ];
});

function generatePhoneNumber($faker){
    return "0" . $faker->numberBetween(100000000, 999999999);
}


