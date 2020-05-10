<?php

use Illuminate\Database\Seeder;

class CoSoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CoSo::class, 80)->create();

    }
}
