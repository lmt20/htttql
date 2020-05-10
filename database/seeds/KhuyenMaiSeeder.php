<?php

use Illuminate\Database\Seeder;

class KhuyenMaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\KhuyenMai::class, 50)->create();
        
    }
}
