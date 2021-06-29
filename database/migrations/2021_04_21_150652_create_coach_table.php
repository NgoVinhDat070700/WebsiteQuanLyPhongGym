<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coach', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tenkhachhangmua');
            $table->string('gioitinh');
            $table->string('image');
            $table->date('ngaysinh');
            $table->integer('luong');
            $table->string('kinhnghiem');
            $table->longText('mota');
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
        Schema::dropIfExists('coach');
    }
}
