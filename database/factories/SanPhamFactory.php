<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SanPham;
use Faker\Generator as Faker;

$factory->define(SanPham::class, function (Faker $faker) {
    $product = loadProduct();
    $price_origin = $product['product_price'];
    $price_tmp = str_replace(".","", $price_origin);
    $price_str = str_replace("₫","", $price_tmp);
    // $price = (int)$price_str;
    return [
        'id' => $product['product_id'],
        'id_hang_san_pham' => $product['brand_id'],
        'id_co_so' => App\CoSo::orderByRaw('RAND()')->first(),
        'ten' => $product['product_name'], 
        'hinh_anh' => $product['product_image'], 
        'gia_ban' => $price_str,
        'mo_ta' => $product['product_info'],
        
    ];
});

$products_file = file_get_contents(base_path('storage/json/products.json'));
$products_data = json_decode($products_file,true);
$GLOBALS['products'] = $products_data;
// error_log(json_encode($GLOBALS['products'][0]));
function loadProduct(){
    if(!empty($GLOBALS['products'])){
        $product = $GLOBALS['products'][0];
        array_shift($GLOBALS['products']);
        return $product;
    }
}


// $GLOBALS['smartPhoneName'] = ['Apple' => [
//     'Iphone 6', 'Iphone 6s', 'Iphone 6 Plus', 'Iphone7 ', 'Iphone 7 Plus', 'Iphone 8', 'Iphone 8 Plus', 'Iphone X', 'Iphone XS', 'Iphone XS Max'
// ], 
//     'Samsung' => [
//         'Galaxy S20', 'Galaxy S20 5G', 'Galaxy S20+', 'Galaxy S10 5G', 'Galaxy S10+', 'Galaxy S10', 'Galaxy Note 10+', 'Galaxy Note 10 Lite', 'Galaxy Z Flip', 'Galaxy A71', 'Galaxy A51', 'Galaxy M11'
// ]
//     ];
// $GLOBALS['totalSmartPhoneName'] = getTotalSmartPhoneName();
// function getTotalSmartPhoneName(){
//     $total = 0;
//     foreach ($GLOBALS['smartPhoneName'] as $bra) {
//         $total += count($bra);
//     }
//     return $total;
// }

// function generateNameAndBrand(){
//     if($GLOBALS['totalSmartPhoneName'] > 0){
//         foreach ($GLOBALS['smartPhoneName'] as $key => $value) {
//             $nameBrand = [$key , $value[0]];
//             if(count($GLOBALS['smartPhoneName'][$key]) == 1){
//                 array_shift($GLOBALS['smartPhoneName']);
//             }
//             else{
//                 array_shift($GLOBALS['smartPhoneName'][$key]);
//             }

//             return $nameBrand;
//         }
//     }
// }

