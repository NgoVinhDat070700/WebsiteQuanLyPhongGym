<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dichvu;
use Exception;

class DichvuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $dichvu= Dichvu::paginate(3);
        return view('Admin/dichvu.index',['dichvu'=>$dichvu]);
    }
    public function create()
    {
        return view('Admin/dichvu/create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'tTen'=>'required',
            'tGia'=>'required',
            'tMota'=>'required',
            'img'=>'required|mimes:jpg,png,jpeg|max:5048'
        ]);
        $newImageName = uniqid() .'-'.$request->tTen . '.' . 
        $request->img->extension();
        $request->img->move(public_path('images/img-dichvu'),$newImageName);
        Dichvu::create([
            'tendichvu'=>$request->input('tTen'),
            'image'=>$newImageName,
            'mota'=>$request->input('tMota'),
            'gia'=>$request->input('tGia'),
            'trangthai'=>$request->input('rTrangthai')
        ]);
        return redirect('/Admin/dichvu')->with('message','Thêm thành công!');
    }
    public function show($id)
    {
        $dv=Dichvu::findOrFail($id);
        return view('Admin/dichvu.show',['dichvu'=>$dv]);
    }
    public function edit($id)
    {
        $dichvu=Dichvu::find($id);
        return view('Admin/dichvu.edit')->with('dichvu',$dichvu);
    }
    public function update(Request $request, $id)
    {
        $dichvu = Dichvu::find($id);
        $dichvu->tendichvu=$request->input('tTen');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename=time() . "." . $extension;
            $file->move(public_path('images/img-dichvu'),$filename);
            $dichvu->image = $filename;
        }
        $dichvu->mota = $request->input('tMota');
        $dichvu->gia = $request->input('tGia');
        $dichvu->trangthai = $request->input('rTrangthai');
        $dichvu->save();
        return redirect('/Admin/dichvu')->with('dichvu',$dichvu);
    }
    public function destroy($id)
    {
        try{
            $dichvu = Dichvu::findOrFail($id);
            $dichvu->delete();
            return redirect('/Admin/dichvu');
        }
        catch(Exception $e)
        {
            die("Không thể xóa vì dịch vụ này liên quan đến các Danh mục khác");
        }
    }
}
