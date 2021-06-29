<?php

namespace App\Http\Controllers;

use App\Dichvu;
use App\LoaiSanPham;
use App\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SanPhamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $sanpham = SanPham::orderBy('id','DESC')->paginate(4);
        return view('Admin/sanpham.index',['sanpham'=>$sanpham]);
    }
    public function create()
    {
        $loaisanpham=LoaiSanPham::all();
        $dichvu = Dichvu::all();
        return view('Admin/sanpham.create',['loaisanpham'=>$loaisanpham,'dichvu'=>$dichvu]);
    }
    public function show(Request $request)
     {
        $search = $request->get('search');
        $sanpham = SanPham::where('tensanpham','like','%'.$search.'%')->paginate(5);
        return view('Admin/sanpham.index',['sanpham'=>$sanpham]);
        
     }
    public function store(Request $request)
    {
        $request->validate([
            'tTensanpham'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048',
            'tGia'=>'required',
            'tMota'=>'required',
            'rTrangthai'=>'required'
        ]);
        $newImageName = uniqid() .'-'.$request->tTensanpham . '.' . 
        $request->image->extension();
        $request->image->move(public_path('images/img_sanpham'),$newImageName);
        SanPham::create([
            'tensanpham'=>$request->input('tTensanpham'),
            'image'=>$newImageName,
            'gia'=>$request->input('tGia'),
            'mota'=>$request->input('tMota'),
            'trangthai'=>$request->input('rTrangthai'),
            'loaisanpham_id'=>$request->input('idloaisanpham'),
            'dichvu_id'=>$request->input('iddichvu')
        ]);
        return Redirect('/Admin/sanpham')->with('message','Thêm thành công!');
        
    }
    public function edit($id)
    {
        $loaisanpham = LoaiSanPham::all();
        $dichvu = Dichvu::all();
        $sanpham = SanPham::findOrFail($id);
        return view('Admin/sanpham.update',['loaisanpham'=>$loaisanpham,'dichvu'=>$dichvu,'sanpham'=>$sanpham]);
    }
    public function update(Request $request, $id)
    {
        $sanpham = SanPham::find($id);  
        $sanpham->tensanpham= $request->input('tTensanpham');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename=time() . "." . $extension;
            $file->move(public_path('images/img_sanpham'),$filename);
            $sanpham->image = $filename;
        }
        $sanpham->gia=$request->input('tGia');
        $sanpham->mota = $request->input('tMota');
        $sanpham->trangthai = $request->input('rTrangthai');
        $sanpham->loaisanpham_id=$request->input('idloaisanpham');
        $sanpham->dichvu_id = $request->input('iddichvu');
        $sanpham->save();
        return redirect('/Admin/sanpham')->with('sanpham',$sanpham);
    }
    public function destroy($id)
    {
        $sanpham = SanPham::findOrFail($id);
        $sanpham->delete();
        return Redirect('/Admin/sanpham');
    }
    
}
