@extends('layouts.layouts_home')
@section('content_home')
<img src="{{asset('images/img-trangchinh/whey1.jpg')}}" style="width: 1296px;margin-top: 90px;">
		<br>
		<br>
		<hr width="500px" style="height: 5px; background: red; border: none;">
		<div class="tcsp">
		<h1 align="left" style="float: left;">TẤT CẢ SẢN PHẨM</h1>
		<div class="ngang2">
				<div style="margin-left: 25px; margin-bottom: 10px;">
				<form name="fTimkiem" id="fTimkiem" action="/Client/SanPham/show" method="get">
				<input type="text" id="search" name="search" size="25" placeholder="Tên sản phẩm">
<!--					<input type="text" id="ma_nhom" name="ma_nhom" size="25" placeholder="Tên sản phẩm">-->
				<input type="submit" name="bSubmit" id="bSubmit" value="Tìm kiếm">
				</form>
			</div>
			</div>
			
			
		</div>
<!--		<hr width="500px" style="height: 5px; background: red; border: none;">-->
		
		<div id="a">
<!--		<div class="table_wrapper">-->
		<div class="sanpham">
	@foreach($sanpham as $sp)
			<div class="sanpham1">
				<div><img src="{!!asset('images/img_sanpham/').'/'.$sp->image!!}" style="max-width: 207px; max-height: 207px"></div>
				<div class="chu">
                    <p style="font-weight: 700; color: red; margin-top: -90px;">Giá:{{number_format($sp->gia, 0, ',', '.')}}VNĐ</p>
					
                </div>
                <p style="font-weight: bold;">Tên Sản Phẩm:{{$sp->tensanpham}}</p>
				</a>
				<div class="tong_vongtron">
					<a href="/Client/ChiTietSanPham/{{$sp->id}}">
						<div class="vongtron">
							<i class="far fa-eye" style="position: absolute; color: #FFF; left: 6px; top: 7px;"></i>
						</div>
					</a>
					<a href="/Client/Add_GioHang/{{$sp->id}}">
						<div class="vongtron" style="top: 5px">
						<i class="fas fa-cart-plus" style="position: absolute; color: #FFF; left: 6px; top: 7px;" ></i>
						</div>
					</a>
				</div>
			</div>
		@endforeach
		</div>
		{{$sanpham->links()}}
<!--			</div>-->
		<!-- Button to Open the Modal -->
<!--  Open modal-->
</div>

<!-- The Modal -->
        <div id="icon_cart"></div>
@endsection