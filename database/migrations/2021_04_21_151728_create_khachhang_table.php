<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tenkhachhang');
            $table->string('sodienthoai');
            $table->string('email');
            $table->string('nhucau');
            $table->string('trangthai');
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
        Schema::dropIfExists('khachhang');
    }
}
