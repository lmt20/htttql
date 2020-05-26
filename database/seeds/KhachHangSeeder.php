<?php

use Illuminate\Database\Seeder;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\KhachHang::class, 10)->create();
        factory(App\KhachHang::class, 1000)->create();
    }
}
