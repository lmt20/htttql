<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\HangSanPham;
use Faker\Generator as Faker;
$brands_file = file_get_contents(base_path('storage/json/brands.json'));
$brands_data = json_decode($brands_file,true);
$GLOBALS['brands'] = $brands_data;
$GLOBALS['countx'] = count($GLOBALS['brands'])-1;

function readSmartphoneBrand(){
    if($GLOBALS['countx'] >= 0){
        return $GLOBALS['brands'][$GLOBALS['countx']--];
    }
    else  {
        return "Others";
    }    
}

$factory->define(HangSanPham::class, function (Faker $faker) {
    $brand = readSmartphoneBrand();
    return [
        'id' =>  $brand['brand_id'], 
        'ten_hang' => $brand['brand_name'],
    ];
});

// $factory->define(HangSanPham::class, function (Faker $faker) {
//     return [
//         'ten_hang' => generateSmartphoneBrand(),
//     ];
// });



// $GLOBALS['brand'] = ['Apple', 'SamSung', 'OPPO', 'Sony', 'Vivo', 'Huawei', 'HTC', 'Xixaomi', 'Mobiistar', 'Lenovo'];
// $GLOBALS['countx'] = count($GLOBALS['brand'])-1;

// function generateSmartphoneBrand(){
//     if($GLOBALS['countx'] >= 0){
//         return $GLOBALS['brand'][$GLOBALS['countx']--];
//     }
//     else  {
//         return "Others";
//     }    
// }
