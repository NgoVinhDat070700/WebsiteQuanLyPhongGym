<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Dichvu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogHomeController extends Controller
{
    public function index()
    {
        $dichvu = Dichvu::all();
        $blog = Blog::orderBy('id','DESC')->paginate(5);
        return view('Client/Blog',['blog'=>$blog,'dichvu'=>$dichvu]);
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
}
