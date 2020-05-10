<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoaDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoa_don', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_khach_hang');
            $table->unsignedBigInteger('id_nhan_vien');
            $table->timestamp('thoi_gian');
            $table->double('tong_tien');
            
            $table->foreign('id_khach_hang')
                    ->references('id')
                    ->on('khach_hang')
                    ->onDelete('cascade');

            $table->foreign('id_nhan_vien')
                    ->references('id')
                    ->on('nhan_vien')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoa_don');
    }
}
