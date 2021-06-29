<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HuanLuyenVien extends Model
{
    public $table = "coach";
    protected $fillable=['tenkhachhangmua','gioitinh','image','ngaysinh','luong','kinhnghiem','mota','dichvu_id'];
}
