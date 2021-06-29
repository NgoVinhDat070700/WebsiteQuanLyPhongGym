<?php

namespace App\Http\Controllers;

use App\GioHang;
use App\SPGioHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HoaDonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $hoadons = GioHang::paginate(5);
        return view('Admin/donhang.index',['hoadons'=>$hoadons]);
    }
    public function edit($id)
    {
        $hoadon = GioHang::find($id);
        return view('Admin/donhang.update',['hoadon'=>$hoadon]);
    }
    public function update(Request $request, $id)
    {
        $hoadon = GioHang::find($id);
        $hoadon->tenkhachhangmua=$request->input('tTenkhachhangmua');
        $hoadon->sodienthoai=$request->input('tSodienthoai');
        $hoadon->diachi=$request->input('tDiachi');
        $hoadon->trangthai=$request->input('rTrangthai');
        $hoadon->thongtin = $request->input('tThongtin');
        $hoadon->save();
        return redirect('/Admin/donhang')->with('hoadon',$hoadon);
    }
    public function destroy($id)
    {
        $hoadon = GioHang::find($id);
        $hoadon->delete();
        return redirect('/Admin/donhang')->with('hoadon',$hoadon);
    }
    public function show(Request $request)
    {
        $search = $request->get('search');
        $hoadon = GioHang::where('tenkhachhangmua','like','%'.$search.'%')
                            ->orwhere('sodienthoai',$search)
                            ->paginate(5);
        return view('Admin/donhang.index',['hoadons'=>$hoadon]);
    }
    public function showcthd($id_giohang)
    {
        $hoadon = GioHang::find($id_giohang);
        $cthd = DB::table('giohang')
                    ->join('spgiohang', 'giohang.id', '=', 'spgiohang.giohang_id')
                    ->leftjoin('sanpham', 'spgiohang.sanpham_id', '=', 'sanpham.id')
                    ->where('spgiohang.giohang_id', '=', $id_giohang)
                    ->select('giohang.*', 'spgiohang.*', 'sanpham.tensanpham as sanpham_tensp')
                    ->get();
        return view('Admin/donhang/showcthd',['cthd'=>$cthd,'hoadon'=>$hoadon]);
                    
    }
}
