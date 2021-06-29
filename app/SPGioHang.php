<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SPGioHang extends Model
{
    public $table = "spgiohang";
    protected $fillable=['giohang_id','sanpham_id','gia','soluong'];
}
