<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SanPhamBan;
use Faker\Generator as Faker;

$factory->define(SanPhamBan::class, function (Faker $faker) {

    while(true){
        $productId = App\SanPham::orderByRaw('RAND()')->first();
        $invoiceId = App\HoaDon::orderByRaw('RAND()')->first();
        if(!testExistance([$invoiceId, $productId])){
            array_push($GLOBALS['invoice_product'], [$invoiceId, $productId]);
            break;
        }
    }
    $promotionId = App\KhuyenMai::orderByRaw('RAND()')->first();
    $productPrice = App\SanPham::find($productId)->first()->gia_ban;
    $promotionPercent = App\KhuyenMai::find($promotionId)->first()->muc_giam;
    // $productPrice = 1;
    $productNumber = $faker -> randomElement([
        $faker->numberBetween(1,3),
        $faker->numberBetween(1,3),
        $faker->numberBetween(1,3),
        $faker->numberBetween(1,3),
        $faker->numberBetween(1,3),
        $faker->numberBetween(4,5),
        $faker->numberBetween(4,5),
        $faker->numberBetween(4,5),
        $faker->numberBetween(5,20)
    ]);
    return [
        'id_hoa_don' => $invoiceId,
        'id_san_pham' => $productId,
        'id_khuyen_mai' => $promotionId,
        'so_luong' => $productNumber,
        'thanh_tien' => $productPrice * $productNumber * (100 - $promotionPercent)/100,
    ];
});


$GLOBALS['invoice_product'] = [];

function testExistance($inv_pro){
    foreach($GLOBALS['invoice_product'] as $ele){
        if($ele == $inv_pro){
            return true;
        }
    }
    return false;
}