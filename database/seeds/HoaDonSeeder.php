<?php

use Illuminate\Database\Seeder;

class HoaDonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\HoaDon::class, 30)->create();
        factory(App\HoaDon::class, 4000)->create();
        
    }
}
