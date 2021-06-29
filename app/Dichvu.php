<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dichvu extends Model
{
    public $table='dichvu';
    protected $fillable=['tendichvu','image','gia','mota','trangthai'];
}
