@extends('layouts.layouts')
@section('content')
<center><h1>Chào mừng bạn đến với Hệ thống Swequity!</h1></center>
<div class="thongke" style="display: inline-flex;margin-left:50px;margin-top: 30px;">
    <div class="thongke1">
        <img src="{{asset('images/img-coach/083358.jpg')}}" style="width: 200px;">
        <center><h2>Tổng Nhân Viên : {{$nhanvien}}</h2></center>
    </div>
    <div class="thongke1"> 
    <img src="{{asset('images/img_sanpham/60aa42a18ad5b-Impact whey isolate 2.5kg 100 servings.jpg')}}" style="width: 200px;">
    <center><h2>Tổng Sản phẩm : {{$sanpham}}</h2></center>
    </div>
    <div class="thongke1">
    <img src="{{asset('images/img-dichvu/dvgym.jpg')}}" style="width: 200px;">
    <center><h2>Tổng dịch vụ : {{$dichvu}}</h2></center>
    </div>
</div>
<div class="thongke" style="display: inline-flex;margin-left:50px;">
<div class="thongke1">
    <img src="{{asset('images/anhhoadon.jpg')}}" style="width: 200px;">
    <center><h2>Hóa đơn đợi xử lý : {{$hoadon}}</h2></center>
    </div>
    <div class="thongke1">
    <img src="{{asset('images/blogs-icon-6.jpg')}}" style="width: 200px;">
    <center><h2>Tổng Blogs Đăng : {{$blog}}</h2></center>
    </div>
    <div class="thongke1">
    <img src="{{asset('images/khachhang.png')}}" style="width: 200px;">
    <center><h2>Số khách hàng : {{$khachhang}}</h2></center>
    </div>
</div>
@endsection