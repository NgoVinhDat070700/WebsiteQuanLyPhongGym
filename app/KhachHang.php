<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    public $table = "khachhang";
    protected $fillable = ['tenkhachhang','sodienthoai','email','nhucau','trangthai','dichvu_id'];
}
