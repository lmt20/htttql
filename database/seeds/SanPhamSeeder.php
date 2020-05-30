<?php

use Illuminate\Database\Seeder;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = factory(App\SanPham::class, count($GLOBALS['products']))->create();
        foreach($products as $product){
            factory(App\SanPhamLuuTru::class)->create([
                'id_san_pham' => $product->id,
                'id_co_so' => $product->id_co_so,
                'so_luong' => rand(100, 500)
           ]);
        }
        
    }
}
