<?php

use Illuminate\Database\Seeder;

class DoanhNghiepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        factory(App\DoanhNghiep::class, 30)->create();
        // factory(App\DoanhNghiep::class, 30)->create()->each(function ($doanhnghiep){
        //     factory(App\CoSo::class)->create(['id_doanh_nghiep' => $doanhnghiep->id]);
        // });
    }
}
