<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Dichvu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $blogs = Blog::orderBy('id','DESC')->paginate(4);
        return view('Admin/blog.index',['blogs'=>$blogs]);
    }
    public function index_home()
    {
        $dichvu = Dichvu::all();
        $blog = Blog::paginate(5);
        return view('Client/Blog',['blog'=>$blog,'dichvu'=>$dichvu]);
    }
    public function create()
    {
        $dichvu = Dichvu::all();
        return view('Admin/blog.create',['dichvu'=>$dichvu]);
    }
    public function show(Request $request, $id)
     {
        $dichvu = Dichvu::find($id);
        $blog = DB::table('blog')
                    ->join('dichvu', 'blog.dichvu_id', '=', 'dichvu.id')
                    ->where('blog.dichvu_id', '=', $id)
                    ->select('dichvu.*', 'blog.*')
                    ->get();
        return view('/Client/Blog',['blog'=>$blog,'dichvu'=>$dichvu]);
        
     }
    public function store(Request $request)
    {
        $request->validate([
            'tTieude'=>'required',
            'tVideo'=>'required',
            'tMota'=>'requied',
            'tNoidung'=>'required'
        ]);
        Blog::create([
            'tieude'=>$request->input('tTieude'),
            'video'=>$request->input('tVideo'),
            'noidung'=>$request->input('tNoidung'),
            'dichvu_id'=>$request->input('iddichvu')
        ]);
        return redirect('/Admin/blog')->with('message','Thêm thành công!');
    }
    public function edit($id)
    {
        $dichvu = Dichvu::all();
        $blog = Blog::findOrFail($id);
        return view('Admin/blog.update',['blog'=>$blog,'dichvu'=>$dichvu]);
    }
    public function update(Request $request, $id)
    {
        $blog = Blog:: findOrFail($id);
        $blog->tieude = $request->input('tTieude');
        $blog->video = $request->input('tVideo');
        $blog->noidung = $request->input('tNoidung');
        $blog->dichvu_id=$request->input('iddichvu');
        $blog->save();
        return redirect('/Admin/blog')->with('blog',$blog);
    }
    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();
        return redirect('/Admin/blog');
    }
}
