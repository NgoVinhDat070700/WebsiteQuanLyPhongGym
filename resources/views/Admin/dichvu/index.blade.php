@extends('layouts.layouts')
@section('content')
<h1 align="center">Thông tin Dịch Vụ</h1>
	<br>
<!--	Tìm kiếm-->
	<div class="thanhngang">
        <div class="ngang1"><a href="/Admin/dichvu/create"><button>Thêm Dịch Vụ</button></a></div>
	</div>
	<table>
		<thead>
			<tr align="center">
				<th>ID dịch vụ</th>
                <th>Tên dịch vụ</th>
                <th>Ảnh</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Trạng thái</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
        @foreach($dichvu as $dv)
        <tr>
            <td>{{$dv->id}}</td>
            <td>{{$dv->tendichvu}}</td>
            <td><img src="{!!asset('images/img-dichvu/').'/'.$dv->image!!}" width="100px" height="100px"></td>
            <td>{{$dv->mota}}</td>
            <td>{{number_format($dv->gia, 0, ',', '.')}}</td>
            <td>{{$dv->trangthai}}</td>
            <td style="width: 100px;display: flex;">
            <span>
                <button><a style="text-decoration: none;" href="/Admin/dichvu/edit/{{$dv->id}}">Sửa</a> </button>
            </span>
            - 
            <span>
                <form action="/Admin/dichvu/{{$dv->id}}" method="POST">
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
    {{$dichvu->links()}}
<!--	Thanh phân trang-->
@endsection