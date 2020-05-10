<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_vien', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_co_so');
            $table->string('ho_ten');
            $table->smallInteger('tuoi');
            $table->string('dia_chi');
            $table->string('so_dien_thoai');
            $table->string('chuc_vu');
            $table->foreign('id_co_so')
                    ->references('id')
                    ->on('co_so')
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
        Schema::dropIfExists('nhan_vien');
    }
}
