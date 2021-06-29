@extends('layouts.layouts')
@section('content')
<h1 align="center">Thông tin Loại Sản Phẩm</h1>
	<br>
<!--	Tìm kiếm-->
	<div class="thanhngang">
        <div class="ngang1"><a href="/Admin/loaisanpham/create"><button>Thêm Loại Sản Phẩm</button></a></div>
	</div>
	
	<table>
		<thead>
			<tr align="center">
				<th>ID</th>
                <th>Tên loại sản phẩm</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
        @foreach($loaisanpham as $lsp)
        <tr style=" text-align: center;">
            <td>{{$lsp->id}}</td>
            <td>{{$lsp->tenloaisanpham}}</td>
            <td style="width: 100px;display: flex;">
            <span>
                <button><a style="text-decoration: none;" href="/Admin/loaisanpham/{{$lsp->id}}/edit">Sửa</a> </button>
            </span>
            - 
            <span>
                <form action="/Admin/loaisanpham/{{$lsp->id}}" method="POST">
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
<!--	Thanh phân trang-->
@endsection