<?php

namespace App\Http\Controllers;

use App\GioHang;
use App\SanPham;
use App\SPGioHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThongKeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $hoadons = GioHang::where('trangthai','=','Đã thanh toán')->paginate(5);
        $hoadon = DB::table('giohang')
                    ->join('spgiohang', 'giohang.id', '=', 'spgiohang.giohang_id')
                    ->where('giohang.trangthai', '=','Đã thanh toán')
                    ->select('giohang.*', 'spgiohang.soluong as sl','spgiohang.gia as gias')
                    ->get();
        if( request()->from_date && request()->to_date )
        {
            $hoadon  = GioHang::whereBetween('created_at',[request()->from_date,request()->to_date])->orderBy('created_at','ASC')->get();
        }
        return view('Admin/thongke.index',['hoadons'=>$hoadons,'hoadon'=>$hoadon]);
    }
}
