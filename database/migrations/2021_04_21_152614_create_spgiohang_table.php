<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpgiohangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spgiohang', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('giohang_id');
            $table->foreign('giohang_id')->references('id')->on('giohang')->onDelete('cascade');
            $table->unsignedBigInteger('sanpham_id');
            $table->foreign('sanpham_id')->references('id')->on('sanpham');
            $table->integer('gia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spgiohang');
    }
}
