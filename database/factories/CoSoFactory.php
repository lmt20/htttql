<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CoSo;
use Faker\Generator as Faker;

$factory->define(CoSo::class, function (Faker $faker) {
    return [
        'dia_chi' => generateAddress($faker), 
        'id_doanh_nghiep' => App\DoanhNghiep::orderByRaw('RAND()')->first(),
    ];
});
