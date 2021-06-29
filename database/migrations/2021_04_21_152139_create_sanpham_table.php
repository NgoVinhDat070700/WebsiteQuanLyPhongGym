<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tensanpham');
            $table->string('image');
            $table->integer('gia');
            $table->longText('mota');
            $table->string('trangthai');
            $table->unsignedBigInteger('loaisanpham_id');
            $table->foreign('loaisanpham_id')->references('id')->on('loaisanpham');
            $table->unsignedBigInteger('dichvu_id');
            $table->foreign('dichvu_id')->references('id')->on('dichvu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
