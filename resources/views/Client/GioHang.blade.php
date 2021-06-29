@extends('layouts.layouts_home')
@section('content_home')
<div class="container" style="margin-left: 150px;padding-top: 102px;">
		
		<h1 align="center">Giỏ hàng</h1>
		<br>
		<center><h3>
		@if(session()->has('message'))
        	{{ session()->get('message')}}
        @endif
		</h3></center>
		
<!--		form-->
		
		<table align="center" id="tb" class="table-hover">
			<thead style="border-bottom: 1px solid rgba(179,179,179,1.00)">
				<tr align="center">
					<th width="27">STT</th>
					<th width="106">Tên sản phẩm</th>
					<th width="109">Ảnh sản phẩm</th>
					<th width="67" style="color: red;">Đơn giá</th>
					<th width="71">Số lượng</th>
					<th width="71" style="color: red;">Thành tiền</th>
					<th width="77">Thao tác</th>
				</tr>
			</thead>
			<tbody >
					@php $total =0;$stt=1; @endphp
				@if(session('cart'))
					@foreach(session('cart') as $id=>$sanpham)
					@csrf
					@method('GET')
						@php 
							$sub_total = $sanpham['gia']*$sanpham['soluong'];
							$total += $sub_total;
						@endphp
						<tr align="center" style="border-bottom: 1px solid rgba(179,179,179,1.00)">
						<td>{{$stt++}}</td>
						<td>{{$sanpham['tensanpham']}}</td>
						<td><img src="{!!asset('images/img_sanpham/').'/'.$sanpham['image']!!}" style="width: 100px; height: 100px;"></td>
						<td style="color: red; font-weight: 700;">{{number_format($sanpham['gia'], 0, ',', '.')}}</td>
						<td><form action="{{route('change_qty', $id)}}" class="d-flex" style="display: flex;">
                                    <button
                                        type="submit"
                                        value="down"
                                        name="change_to"
                                        class="btn btn-danger"
                                    >
                                        @if($sanpham['soluong'] === 1) x @else - @endif
                                    </button>
                                    <input
                                        type="number"
										value="{{$sanpham['soluong']}}"
										style="width: 30px;"
                                        disabled>
                                    <button
                                        type="submit"
                                        value="up"
                                        name="change_to"
                                        class="btn btn-success"
                                    >
                                        +
                                    </button>
                                </form></td>
						<td style="color: red; font-weight: 700;">{{number_format($sub_total, 0, ',', '.')}}</td>
						<td><a href="{{route('Client/Remove_Cart',[$id])}}"><button class="xoa">Xóa</button></a></td>
						</tr>
					@endforeach
				
					<tr style="border-bottom: 1px solid rgba(179,179,179,1.00)">
						<td>&emsp;</td>
						<td style="font-weight: 700;">Tổng tiền: </td>
						<td>&emsp;</td>
						<td>&emsp;</td>
						<td>&emsp;</td>
						<td style="color: red; font-weight: 700;" align="center">
						{{number_format($total, 0, ',', '.')}}VNĐ</td>
						<td></td>
						
					</tr>
				@endif
			</tbody>	
			
		</table>
			<br>
			<div class="nut2" style="margin-top: 50px;">
				
<!--				tiep tuc mua hang-->
				<div class="ttmh" style="margin-top: 20px;"><a style="text-decoration: none; color: #FFF" href="/Client/SanPham">Tiếp tục mua hàng</a></div>
				
<!--				cap nhat-->
			<input type="submit" class="nut_cn" value="Cập nhật" name="cap_nhat">
			</div>
			<hr>
			<h1 align="center" style="margin-top: 100px;">Điền thông tin đặt hàng</h1>
			<br>
			<form action="{{route('Client/GioHang')}}" method="post">
			@csrf
			<div class="dh">
                <div><label style="width: 100px;">Người nhận:</label>&ensp;<input type="text" value="" id="tTenkhachhangmua" name="tTenkhachhangmua" style="margin-left: 20px; height: 20px;"/></div>
                <div><label style="width: 100px;"> Điện thoại :  </label>&emsp;<input type="text" value="" id="tSodienthoai" name="tSodienthoai" style="margin-left: 13px; margin-top: 10px; height: 20px;" /></div>
                <div><label style="width: 100px;">Địa chỉ : </label>&emsp;&emsp;&ensp;<input type="text" value="" id="tDiachi" name="tDiachi" style="margin-left: 10px; margin-top: 10px; height: 20px;"/></div>
                <div><label style="width: 100px;">Ghi chú : </label>&emsp;&emsp;<textarea name="tThongtin" id="tThongtin" cols="50" rows="7" style="margin-left: 13px; margin-top: 10px;"></textarea></div>
			<input type="submit" class="nut_dh" value="Đặt hàng" id="dat_hang" name="dat_hang">
			</div>
			</form>
			<br>
			
			
	</div>
@endsection