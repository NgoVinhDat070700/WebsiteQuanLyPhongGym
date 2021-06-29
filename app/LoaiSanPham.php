<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    public $table = "loaisanpham";
    protected $fillable=['tenloaisanpham'];
}
