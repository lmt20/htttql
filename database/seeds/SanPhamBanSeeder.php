<?php

use Illuminate\Database\Seeder;

class SanPhamBanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SanPhamBan::class, 4000)->create();
        
    }
}
