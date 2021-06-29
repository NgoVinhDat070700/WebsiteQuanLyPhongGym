<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Dichvu;
use App\GioHang;
use App\HuanLuyenVien;
use App\KhachHang;
use App\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $nhanvien = HuanLuyenVien::all()->count();
        $sanpham = SanPham::all()->count();
        $dichvu = Dichvu::all()->count();
        $blog = Blog::all()->count();
        $khachhang = KhachHang::all()->count();
        $hoadon = GioHang::where('trangthai','=',"Chưa thanh toán")->count();
        return view('Admin.index',['nhanvien'=>$nhanvien,'sanpham'=>$sanpham,'dichvu'=>$dichvu,'blog'=>$blog,'khachhang'=>$khachhang,'hoadon'=>$hoadon]);
    }
}
