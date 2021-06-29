@extends('layouts.layouts_home')
@section('content_home')
        <center><h1 style="padding-top: 90px;">Chi Tiết Sản Phẩm</h1></center>
		<div class="giua" >
		<div class="left ">
			<img class="img-fluid" src="{!!asset('images/img_sanpham/').'/'.$sanpham->image!!}" style="margin-top: 80px; width: 300px;height: 300px;" >
			
		</div>
		<div class="right" style="margin-top: 50px; margin-left: 30px;">
			<h1 style="width: 458px;">Tên Sản Phẩm:{{$sanpham->tensanpham}}</h1>
			<div style="color: yellow"><i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i>
			<i class="fas fa-star"></i> </div>
			<p>Mã sản phẩm:{{$sanpham->id}}</p>
			<div class="check" style="font-size: 20px;">
				Mô tả sản phẩm:{{$sanpham->mota}}
				
			</div>
			<h3>Giá:{{number_format($sanpham->gia, 0, ',', '.')}}VNĐ</h3>
			
			<p><a class="mua" href="/Client/Add_GioHang/{{$sanpham->id}}"> Mua hàng</a></p>
			
        </div>	
	</div>   
@endsection