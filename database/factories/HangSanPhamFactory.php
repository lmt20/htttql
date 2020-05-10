<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\HangSanPham;
use Faker\Generator as Faker;

$factory->define(HangSanPham::class, function (Faker $faker) {
    return [
        'ten_hang' => generateSmartphoneBrand(),
    ];
});



$GLOBALS['brand'] = ['Apple', 'SamSung', 'OPPO', 'Sony', 'Vivo', 'Huawei', 'HTC', 'Xixaomi', 'Mobiistar', 'Lenovo'];
$GLOBALS['countx'] = count($GLOBALS['brand'])-1;

function generateSmartphoneBrand(){
    if($GLOBALS['countx'] >= 0){
        return $GLOBALS['brand'][$GLOBALS['countx']--];
    }
    else  {
        return "Others";
    }    
}
