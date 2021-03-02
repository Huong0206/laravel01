<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoaitinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaitin', function (Blueprint $table) {
            $table->id();
            $table->integer('thu_tu');
            $table->string('tieu_de');
            $table->string('tieu_de_khong_dau');
            $table->string('tom_tat');
            $table->unsignedBigInteger('theloai_id');
            $table->foreign('theloai_id')->references('id')->on('theloai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loaitin');
    }
}
