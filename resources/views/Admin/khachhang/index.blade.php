@extends('layouts.layouts')
@section('content')
<h1 align="center">Danh sách khách hàng</h1>
	<br>
<!--	Tìm kiếm-->
	<div class="thanhngang">
        <div class="ngang1"><a href="/Admin/khachhang/create"><button>Thêm khách hàng</button></a></div>
	</div>
	<form name="fTimkiem" id="fTimkiem" action="/Admin/khachhang/show" method="get">
    Từ khóa: 
        <input type="text" name="search" id="search">
    <!-- Nhóm SP:
    <select name="smanhom" id="smanhom">
        <option value="0"> Tất cả nhóm SP </option>
    
    </select> -->
    <input type="submit" name="timkiem" id="timkiem" value="Tìm kiếm">
    </form>
	<table>
		<thead>
			<tr align="center">
				<th>ID </th>
                <th>Tên khách hàng</th>
                <th>Số điện thoại</th>
                <th>Email</th>
                <th>Nhu cầu</th>
                <th>Trạng thái</th>
                <th>ID dịch vụ đăng kí</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
        @foreach($khachhang as $kh)
        <tr style=" text-align: center;">
            <td>{{$kh->id}}</td>
            <td>{{$kh->tenkhachhang}}</td>
            <td>{{$kh->sodienthoai}}</td>
            <td>{{$kh->email}}</td>
            <td>{{$kh->nhucau}}</td>
            <td>{{$kh->trangthai}}</td>
            <td>{{$kh->dichvu_id}}</td>
            <td style="width: 100px;display: flex;">
            <span>
                <button><a style="text-decoration: none;" href="/Admin/khachhang/{{$kh->id}}/edit">Sửa</a> </button>
            </span>
            - 
            <span>
                <form action="/Admin/khachhang/{{$kh->id}}" method="POST">
                @csrf 
                @method("delete")
                <button type="submit">Delete</button>
                </form>
            </span>
        </tr>
        @endforeach
		</tbody>
	</table>
    <br>
    @if(session()->has('message'))
        <div>{{ session()->get('message')}}</div>
    @endif
    {{$khachhang->links()}}
<!--	Thanh phân trang-->
@endsection