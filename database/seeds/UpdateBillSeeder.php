<?php

use Illuminate\Database\Seeder;

class UpdateBillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoices = App\HoaDon::all();
        foreach($invoices as $invoice){
            $invoice->tong_tien = $this->calculateBill($invoice);
            if($invoice->tong_tien == 0 ){
                $invoice->delete();
            }
            else
            $invoice->save();
        }
    }

    function calculateBill($invoice){
        $totalBill = 0;
        $productsSaled = App\SanPhamBan::where('id_hoa_don', $invoice->id)->get();
        foreach($productsSaled as $productSaled){
            $totalBill += $productSaled->thanh_tien;
        }
        return $totalBill;
    }
}
