<?php

namespace App\Http\Controllers;

use App\HuanLuyenVien;
use App\Dichvu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HuanLuyenVienController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     public function index()
     {
         $huanluyenvien = HuanLuyenVien::orderBy('id','DESC')->paginate(4);
         return view('Admin/huanluyenvien.index',['huanluyenvien'=>$huanluyenvien]);
     }
     public function create()
     {
         $dichvu = Dichvu::all();
         return view('Admin/huanluyenvien.create',['dichvu'=>$dichvu]);
     }
     public function show(Request $request)
     {
        $search = $request->get('search');
        $huanluyenvien = HuanLuyenVien::where('tenkhachhangmua','like','%'.$search.'%')->paginate(5);
        return view('Admin/huanluyenvien.index',['huanluyenvien'=>$huanluyenvien]);
        
     }
     public function store(Request $request)
     {
        $request->validate([
            'tTen'=>'required',
            'image'=>'required|mimes:jpg,png,jpeg|max:5048',
            'tMota'=>'required',
            'dNgaysinh'=>'required',
            'tLuong'=>'required',
            'tKinhnghiem'=>'required',
            'iddichvu'=>'required'
        ]);
        $newImageName = uniqid() .'-'.$request->tTen . '.' . 
        $request->image->extension();
        $request->image->move(public_path('images/img-coach'),$newImageName);
        HuanLuyenVien::create([
            'tenkhachhangmua'=>$request->input('tTen'),
            'gioitinh'=>$request->input('rGioitinh'),
            'image'=>$newImageName,
            'ngaysinh'=>$request->input('dNgaysinh'),
            'luong'=>$request->input('tLuong'),
            'kinhnghiem'=>$request->input('tKinhnghiem'),
            'mota'=>$request->input('tMota'),
            'dichvu_id'=>$request->input('iddichvu'),
        ]);
        return redirect('/Admin/huanluyenvien')->with('message','Thêm thành công!');
     }
     public function edit($id)
     {
         $dichvu = Dichvu::all();
         $huanluyenvien = HuanLuyenVien::findOrFail($id);
         return view('Admin/huanluyenvien.update',['huanluyenvien'=>$huanluyenvien,'dichvu'=>$dichvu]);
     }
     public function update(Request $request, $id)
     {
        $huanluyenvien = HuanLuyenVien::find($id);  
        $huanluyenvien->tenkhachhangmua= $request->input('tTen');
        $huanluyenvien->gioitinh = $request->input('rGioitinh');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename=time() . "." . $extension;
            $file->move(public_path('images/img-coach'),$filename);
            $huanluyenvien->image = $filename;
        }
        $huanluyenvien->ngaysinh=$request->input('dNgaysinh');
        $huanluyenvien->luong = $request->input('tLuong');
        $huanluyenvien->kinhnghiem = $request->input('tKinhnghiem');
        $huanluyenvien->mota = $request->input('tMota');
        $huanluyenvien->dichvu_id = $request->input('iddichvu');
        $huanluyenvien->save();
        return redirect('/Admin/huanluyenvien')->with('huanluyenvien',$huanluyenvien);
     }
     public function destroy($id)
     {
         $huanluyenvien = HuanLuyenVien::findOrFail($id);
         $huanluyenvien->delete();
         return Redirect('/Admin/huanluyenvien');
     }

}
