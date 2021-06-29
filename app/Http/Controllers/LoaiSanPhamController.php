<?php

namespace App\Http\Controllers;

use App\LoaiSanPham;
use Exception;
use Illuminate\Http\Request;

class LoaiSanPhamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $loaisanpham = LoaiSanPham::all();
        return view("Admin/loaisanpham.index",['loaisanpham'=>$loaisanpham]);
    }
    public function create()
    {
        return view('Admin/loaisanpham/create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'tTen'=>'required',
        ]);
        LoaiSanPham::create([
            'tenloaisanpham'=>$request->input('tTen')
        ]);
        return redirect('/Admin/loaisanpham')->with('message','Thêm thành công');
    }
    public function edit($id)
    {
        $loaisanpham = LoaiSanPham::find($id);
        return view('Admin/loaisanpham.update',['loaisanpham'=>$loaisanpham]);

    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'tTen'=>'required',
        ]);
        $loaisanpham=LoaiSanPham::find($id);
        $loaisanpham->tenloaisanpham=$request->input('tTen');
        $loaisanpham->save();
        return redirect('Admin/loaisanpham')->with('loaisanpham',$loaisanpham);
    }
    public function destroy($id)
    {
        try{
            $loaisanpham = LoaiSanPham::findOrFail($id);
            $loaisanpham->delete();
            return view('Admin/loaisanpham');
        }
        catch(Exception $e)
        {
            die("Không thể xóa vì có sản phẩm liên quan đến loại sản phẩm này");
        }
    }
}
