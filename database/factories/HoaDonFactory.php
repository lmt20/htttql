<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\HoaDon;
use Faker\Generator as Faker;

$factory->define(HoaDon::class, function (Faker $faker) {
    return [
        'id_nhan_vien' => App\NhanVien::orderByRaw('RAND()')->first(),
        'id_khach_hang' => App\KhachHang::orderByRaw('RAND()')->first(),
        'thoi_gian' => $faker->dateTimeThisYear,
        'tong_tien' => 0,
    ];
});
