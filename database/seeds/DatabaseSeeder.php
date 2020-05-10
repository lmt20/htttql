<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(KhachHangSeeder::class);
        $this->call(KhuyenMaiSeeder::class);
        $this->call(HangSanPhamSeeder::class);
        $this->call(DoanhNghiepSeeder::class);
        $this->call(CoSoSeeder::class);
        $this->call(NhanVienSeeder::class);
        $this->call(HoaDonSeeder::class);
        $this->call(SanPhamSeeder::class);
        $this->call(SanPhamBanSeeder::class);
        $this->call(UpdateBillSeeder::class);
    }
}
