<?php

namespace App\Http\Controllers;

use App\HuanLuyenVien;
use Illuminate\Http\Request;

class HuanLuyenVienHomeController extends Controller
{
    public function index()
     {
        $huanluyenvien = HuanLuyenVien::orderBy('id','DESC')->paginate(4);
        return view('Client/HuanLuyenVien',['huanluyenvien'=>$huanluyenvien]);
     }
}
