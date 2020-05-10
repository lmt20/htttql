<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_hang_san_pham');
            $table->unsignedBigInteger('id_co_so');
            $table->string('ten');
            $table->double('gia_ban');
            $table->text('mo_ta');
            $table->foreign('id_hang_san_pham')
                    ->references('id')
                    ->on('hang_san_pham')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('san_pham');
    }
}
