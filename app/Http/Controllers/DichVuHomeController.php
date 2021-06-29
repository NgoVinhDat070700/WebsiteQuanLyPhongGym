<?php

namespace App\Http\Controllers;

use App\Dichvu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DichVuHomeController extends Controller
{
    public function index()
    {
        $dichvu= Dichvu::all();
        return view('Client/DichVu',['dichvu'=>$dichvu]);
    }
    public function show($id)
    {
        $dichvu = Dichvu::find($id);
        $huanluyenvien = DB::table('coach')
                    ->join('dichvu', 'coach.dichvu_id', '=', 'dichvu.id')
                    ->where('coach.dichvu_id', '=', $id)
                    ->select('dichvu.*', 'coach.*')->get();
        return view('Client/DichVu',['dichvu'=>$dichvu,'huanluyenvien'=>$huanluyenvien]);
    }
}
