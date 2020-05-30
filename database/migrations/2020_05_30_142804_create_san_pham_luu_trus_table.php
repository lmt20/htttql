<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamLuuTrusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham_luu_tru', function (Blueprint $table) {
            $table->primary(['id_san_pham', 'id_co_so']);
            $table->unsignedBigInteger('id_san_pham');
            $table->unsignedBigInteger('id_co_so');
            $table->integer('so_luong');
            $table->foreign('id_co_so')
            ->references('id')
            ->on('co_so')
            ->onDelete('cascade');
            $table->foreign('id_san_pham')
            ->references('id')
            ->on('san_pham')
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
        Schema::dropIfExists('san_pham_luu_tru');
    }
}
