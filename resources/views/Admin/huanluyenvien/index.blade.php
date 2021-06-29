@extends('layouts.layouts')
@section('content')
<h1 align="center">Thông tin Huấn luyện viên</h1>
	<br>
<!--	Tìm kiếm-->
	<div class="thanhngang">
        <div class="ngang1"><a href="/Admin/huanluyenvien/create"><button>Thêm Huấn luyện viên</button></a></div>
	</div>
	<form name="fTimkiem" id="fTimkiem" action="/Admin/huanluyenvien/search" method="get">
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
                <th>Tên huấn luyện viên</th>
                <th>Giới tính</th>
                <th>Ảnh</th>
                <th>Ngày Sinh</th>
                <th>Lương</th>
                <th>Kinh nghiệm</th>
                <th>Mô tả</th>
                <th>ID dịch vụ</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
        @foreach($huanluyenvien as $hlv)
        <tr style=" text-align: center;">
            <td>{{$hlv->id}}</td>
            <td>{{$hlv->tenkhachhangmua}}</td>
            <td>{{$hlv->gioitinh}}</td>
            <td><img src="{!!asset('images/img-coach/').'/'.$hlv->image!!}" width="100px" height="100px"></td>
            <td>{{$hlv->ngaysinh}}</td>
            <td>{{number_format($hlv->luong, 0, ',', '.')}} VNĐ</td>
            <td>{{$hlv->kinhnghiem}}</td>
            <td>{{$hlv->mota}}</td>
            <td>{{$hlv->dichvu_id}}</td>
            <td style="width: 100px;display: flex;">
            <span>
                <button><a style="text-decoration: none;" href="/Admin/huanluyenvien/{{$hlv->id}}/edit">Sửa</a> </button>
            </span>
            - 
            <span>
                <form action="/Admin/huanluyenvien/{{$hlv->id}}" method="POST">
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
    {{$huanluyenvien->links()}}
<!--	Thanh phân trang-->
@endsection