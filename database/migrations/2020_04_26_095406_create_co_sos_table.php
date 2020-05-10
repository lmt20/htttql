<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoSosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_so', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_doanh_nghiep');
            $table->string('dia_chi');
            $table->foreign('id_doanh_nghiep')
                    ->references('id')
                    ->on('doanh_nghiep')
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
        Schema::dropIfExists('co_so');
    }
}
