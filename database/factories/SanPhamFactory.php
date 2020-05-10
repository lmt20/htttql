<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SanPham;
use Faker\Generator as Faker;

$factory->define(SanPham::class, function (Faker $faker) {
    $nameBrand = generateNameAndBrand();
    return [
        'id_hang_san_pham' => App\HangSanPham::where('ten_hang', $nameBrand[0])->first(),
        'id_co_so' => App\CoSo::orderByRaw('RAND()')->first(),
        'ten' => $nameBrand[1], 
        'gia_ban' => $faker->numberBetween(100, 600 )*50000,
        'mo_ta' => $faker->realText(1000),
        
    ];
});

$GLOBALS['smartPhoneName'] = ['Apple' => [
    'Iphone 6', 'Iphone 6s', 'Iphone 6 Plus', 'Iphone7 ', 'Iphone 7 Plus', 'Iphone 8', 'Iphone 8 Plus', 'Iphone X', 'Iphone XS', 'Iphone XS Max'
], 
    'Samsung' => [
        'Galaxy S20', 'Galaxy S20 5G', 'Galaxy S20+', 'Galaxy S10 5G', 'Galaxy S10+', 'Galaxy S10', 'Galaxy Note 10+', 'Galaxy Note 10 Lite', 'Galaxy Z Flip', 'Galaxy A71', 'Galaxy A51', 'Galaxy M11'
]
    ];
$GLOBALS['totalSmartPhoneName'] = getTotalSmartPhoneName();
function getTotalSmartPhoneName(){
    $total = 0;
    foreach ($GLOBALS['smartPhoneName'] as $bra) {
        $total += count($bra);
    }
    return $total;
}

function generateNameAndBrand(){
    if($GLOBALS['totalSmartPhoneName'] > 0){
        foreach ($GLOBALS['smartPhoneName'] as $key => $value) {
            $nameBrand = [$key , $value[0]];
            if(count($GLOBALS['smartPhoneName'][$key]) == 1){
                array_shift($GLOBALS['smartPhoneName']);
            }
            else{
                array_shift($GLOBALS['smartPhoneName'][$key]);
            }

            return $nameBrand;
        }
    }
}

