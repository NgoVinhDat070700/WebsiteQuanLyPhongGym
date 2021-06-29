@extends('layouts.layouts')
@section('content')
<h1 align="center">Bạn hãy chọn mốc thời gian để xem doanh số </h1>
<form name="fTimkiem" id="fTimkiem" action="/Admin/thongke" method="get" style="display: flex;"> 
    <div class="date" style="display: flex; margin-left: 50px;">
    <p>Date From: <input type="date" id="datepicker" name="from_date"></p>
    <p style="margin-left: 50px;">Date To: <input type="date" id="datepicker2" name="to_date"></p>
    </div>
    <input type="submit" name="timkiem" id="timkiem" value="Xem" style="margin-left: 20px; width: 60px;height: 30px; margin-top: 12px; ">
    </form>
    <table >
		<thead>
			<tr align="center">
				<th>ID hóa đơn</th>
                <th>Tên khách hàng mua</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Thông tin</th>
                <th>Trạng thái</th>
                <th>Ngày đặt</th>
                <th>Chi tiết hóa đơn</th>
			</tr>
		</thead>
		<tbody>
        @php
                    $total=0;
                    $tongsl=0;
                @endphp
        @foreach($hoadons as $hd)
            <tr style=" text-align: center;">
                <td>{{$hd->id}}</td>
                <td>{{$hd->tenkhachhangmua}}</td>
                <td>{{$hd->sodienthoai}}</td>
                <td>{{$hd->diachi}}</td>
                <td>{{$hd->thongtin}}</td>
                <td>{{$hd->trangthai}}</td>
                <td>{{$hd->created_at}}</td>
                <td>
                    <span>
                    <button><a style="text-decoration: none;" href="/Admin/donhang/showcthd/{{$hd->id}}">Xem Chi Tiết</a> </button>
                    </span>
                </td>
            </tr>
        @endforeach
		</tbody>
    </table>
    @foreach($hoadon as $hds)
            @php
                $sub_total = $hds->gias * $hds->sl;
                $total += $sub_total;
            @endphp
    @endforeach
    <h1>Doanh thu:{{number_format($total, 0, ',', '.')}} VNĐ</h1>
    <br>

@endsection