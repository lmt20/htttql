<?php

use Illuminate\Database\Seeder;

class HangSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        if($GLOBALS['countx']>0){
        factory(App\HangSanPham::class, $GLOBALS['countx']+1)->create();
        }
    }
}
