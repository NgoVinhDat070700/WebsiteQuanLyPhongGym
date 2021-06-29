<?php

namespace App\Http\Controllers;

use App\Dichvu;
use App\KhachHang;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $khachhang = KhachHang::orderBy('id','DESC')->paginate(5);
        return view('Admin/khachhang.index',['khachhang'=>$khachhang]);
    }
    
    public function create()
    {
        $khachhang = KhachHang::all();
        $dichvu=Dichvu::all();
        return view('Admin/khachhang.create',['khachhang'=>$khachhang,'dichvu'=>$dichvu]);
    }
    public function show(Request $request)
    {
        $search = $request->get('search');
        $khachhang = KhachHang::where('tenkhachhang','like','%'.$search.'%')->paginate(5);
        return view('Admin/khachhang.index',['khachhang'=>$khachhang]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'tTenkhachhang'=>'required',
            'tSodienthoai'=>'required',
            'tEmail'=>'required',
            'tNhucau'=>'required',
            'trangthai'=>'required',
            'iddichvu'=>'required'
        ]);
        KhachHang::create([
            'tenkhachhang'=>$request->input('tTenkhachhang'),
            'sodienthoai'=>$request->input('tSodienthoai'),
            'email'=>$request->input('tEmail'),
            'nhucau'=>$request->input('tNhucau'),
            'trangthai'=>$request->input('trangthai'),
            'dichvu_id'=>$request->input('iddichvu')
        ]);
        return redirect('/Admin/khachhang')->with('message','Thêm thành công!');
    }
    public function edit($id)
    {
        $dichvu = Dichvu::all();
        $khachhang=KhachHang::find($id);
        return view('Admin/khachhang.update',['dichvu'=>$dichvu,'khachhang'=>$khachhang]);
    }
    public function update(Request $request, $id)
    {
        $khachhang = KhachHang::find($id);
        $khachhang->tenkhachhang=$request->input('tTenkhachhang');
        $khachhang->sodienthoai=$request->input('tSodienthoai');
        $khachhang->email = $request->input('tEmail');
        $khachhang->nhucau=$request->input('tNhucau');
        $khachhang->trangthai=$request->input('trangthai');
        $khachhang->dichvu_id=$request->input('iddichvu');
        $khachhang->save();
        return redirect('/Admin/khachhang')->with('khachhang',$khachhang);
    }
    public function destroy($id)
    {
        $khachhang=KhachHang::find($id);
        $khachhang->delete();
        return redirect('/Admin/khachhang');
    }
}
