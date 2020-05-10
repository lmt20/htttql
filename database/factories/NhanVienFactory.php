<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\NhanVien;
use Faker\Generator as Faker;

$factory->define(NhanVien::class, function (Faker $faker) {
    return [
        'id_co_so' => App\CoSo::orderByRaw('RAND()')->first(),
        'ho_ten' => generateName($faker->randomElement(['Male', 'Female']), $faker), 
        'tuoi' => $faker->numberBetween(22, 55), 
        'dia_chi' => generateAddress($faker),
        'so_dien_thoai' => generatePhoneNumber($faker), 
        'chuc_vu' => $faker->randomElement([
            'Bán Hàng', 'Tư Vấn', 'Quản Lý', 'Tiếp Tân'
        ])
    ];
});
