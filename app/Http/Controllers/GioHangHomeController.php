<?php

namespace App\Http\Controllers;

use App\GioHang;
use App\SanPham;
use App\SPGioHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GioHangHomeController extends Controller
{
    public function index_home()
    {
        $sanpham = SanPham::paginate(5);
        return view('Client/SanPham',['sanpham'=>$sanpham]);
    }
    public function Cart()
    {
        return view('Client/GioHang');
    }
    public function addToCart(SanPham $sanpham)
    {
        $cart = session()->get('cart');
        if(!$cart)
        {
            $cart = [
                $sanpham->id=>[
                    
                    'tensanpham' => $sanpham->tensanpham,
                    'soluong' =>1,
                    'gia' => $sanpham->gia,
                    'image' =>$sanpham->image
                ]
            ];
            session()->put('cart', $cart);
            return redirect('/Client/GioHang')->with('thanhcong','Thêm thành công!');
        }
        if(isset($cart[$sanpham->id]))
        {
            $cart[$sanpham->id]['soluong']++;
            session()->put('cart',$cart);
            return redirect('/Client/GioHang')->with('thanhcong','Thêm thành công!');
        }
        $cart[$sanpham->id]=[
                'id' => $sanpham->id,
                'tensanpham' => $sanpham->tensanpham,
                'soluong' =>1,
                'gia' => $sanpham->gia,
                'image' =>$sanpham->image,
                'mota' =>$sanpham->mota,
                'dichvu_id'=>$sanpham->dichvu_id,
                'loaisanpham_id'=>$sanpham->loaisanpham_id
            ];
        session()->put('cart', $cart);
        return redirect('/Client/GioHang')->with('thanhcong','Thêm thành công!');
    }
    public function changeQty(Request $request, SanPham $sanpham)
    {
        $cart = session()->get('cart');
        if ($request->change_to === 'down') {
            if (isset($cart[$sanpham->id])) {
                if ($cart[$sanpham->id]['soluong'] > 1) {
                    $cart[$sanpham->id]['soluong']--;
                    return $this->setSessionAndReturnResponse($cart);
                } else {
                    return $this->removeFromCart($sanpham->id);
                }
            }
        } else {
            if (isset($cart[$sanpham->id])) {
                $cart[$sanpham->id]['soluong']++;
                return $this->setSessionAndReturnResponse($cart);
            }
        }
        return back();
    }
    public function removefromCart($id)
    {
        $cart = session()->get('cart');
        if(isset($cart[$id]))
        {
            unset($cart[$id]);
            session()->put('cart',$cart);
        }
        return redirect('/Client/GioHang')->with('thanhcong','Thêm thành công!');
    }
    public function ThanhToan(Request $request)
    {
        $cart = session()->get('cart');
        $giohang = new GioHang();
        $giohang->tenkhachhangmua=$request->input('tTenkhachhangmua');
        $giohang->sodienthoai=$request->input('tSodienthoai');
        $giohang->diachi = $request->input('tDiachi');
        $giohang->thongtin=$request->input('tThongtin');
        $giohang->trangthai="Chưa thanh toán";
        $giohang->save();
        foreach($cart as $key=>$value)
        {
            $spgiohang = new SPGioHang();
            $spgiohang->giohang_id=$giohang->id;
            $spgiohang->sanpham_id=$key;
            $spgiohang->gia=$value['gia'];
            $spgiohang->soluong=$value['soluong'];
            $spgiohang->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('message','Thanh toán thành công');
    }
    protected function setSessionAndReturnResponse($cart)
    {
        session()->put('cart', $cart);
        return redirect()->route('Client/GioHang')->with('success', "Added to Cart");
    }
}
