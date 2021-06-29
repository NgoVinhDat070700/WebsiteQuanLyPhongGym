<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    public $table = "giohang";
    protected $fillable = ['tenkhachhangmua','diachi','thongtin','trangthai'];
}
