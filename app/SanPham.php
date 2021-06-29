<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    public $table = "sanpham";
    protected $fillable = ['tensanpham','image','gia','mota','trangthai','loaisanpham_id','dichvu_id'];
}
