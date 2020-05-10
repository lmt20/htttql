<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamBansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham_ban', function (Blueprint $table) {
            $table->primary(['id_hoa_don', 'id_san_pham']);
            $table->unsignedBigInteger('id_hoa_don');
            $table->unsignedBigInteger('id_san_pham');
            $table->unsignedBigInteger('id_khuyen_mai')->nullable();
            $table->integer('so_luong');
            $table->double('thanh_tien');
            $table->foreign('id_hoa_don')
                    ->references('id')
                    ->on('hoa_don')
                    ->onDelete('cascade');
            $table->foreign('id_san_pham')
                    ->references('id')
                    ->on('san_pham')
                    ->onDelete('cascade');
            $table->foreign('id_khuyen_mai')
                    ->references('id')
                    ->on('khuyen_mai')
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
        Schema::dropIfExists('san_pham_ban');
    }
}
