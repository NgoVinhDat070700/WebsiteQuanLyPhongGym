<?php

namespace App\Http\Controllers;

use App\Dichvu;
use App\LoaiSanPham;
use App\SanPham;
use Illuminate\Http\Request;

class SanPhamHomeController extends Controller
{
    public function index()
    {
        $dichvu = Dichvu::all();
        $sanpham = SanPham::orderBy('id','DESC')->paginate(8);
        return view('Client/SanPham',['sanpham'=>$sanpham,'dichvu']);
    }
    public function show(Request $request)
     {
        $search = $request->get('search');
        $sanpham = SanPham::where('tensanpham','like','%'.$search.'%')->paginate(5);
        return view('Client/SanPham',['sanpham'=>$sanpham]);
     }
     public function store(Request $request)
     {
         
     }
     public function show_id($id)
    {
        $loaisanpham = LoaiSanPham::all();
        $sanpham = SanPham::findOrFail($id);
        return view('Client/ChiTietSanPham',['loaisanpham'=>$loaisanpham,'sanpham'=>$sanpham]);
    }
}
