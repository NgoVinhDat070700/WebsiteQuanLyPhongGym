<?php

namespace App\Http\Controllers;
use App\Dichvu;
use App\KhachHang;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ĐKKhachHangController extends Controller
{
    public function index()
    {
        $dichvu = Dichvu::all();
        return view('Client/DangKyDichVu',['dichvu'=>$dichvu]);
    }
    public function create()
    {
        $khachhang = KhachHang::all();
        $dichvu=Dichvu::all();
        return view('Client/DangKyDichVu',['khachhang'=>$khachhang,'dichvu'=>$dichvu]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'tTenkhachhang'=>'required',
            'tSodienthoai'=>'required',
            'tEmail'=>'required',
            'tNhucau'=>'required',
           
            'iddichvu'=>'required'
        ]);
        $khachhang=KhachHang::create([
            'tenkhachhang'=>$request->input('tTenkhachhang'),
            'sodienthoai'=>$request->input('tSodienthoai'),
            'email'=>$request->input('tEmail'),
            'nhucau'=>$request->input('tNhucau'),
            'trangthai'=>value("Chưa thanh toán"),
            'dichvu_id'=>$request->input('iddichvu')
        ]);
        Mail::send('mail.Content-Email',$khachhang->toArray(),function($mess) use($request){
            $mess->to($request->input('tEmail'),'SWEQUITY')
            ->subject('Đăng Ký Thành Công');
        });
        return redirect('/Client/DangKyDichVu')->with('message','Đăng Ký thành công Web đã gửi thông tin tới mail của bạn!');
    }
}
