@extends('layouts.layouts')
@section('content')
<h1 align="center">Thông tin Blog</h1>
	<br>
<!--	Tìm kiếm-->
	<div class="thanhngang">
        <div class="ngang1"><a href="/Admin/blog/create"><button>Thêm Blog</button></a></div>
	</div>
	
	<table>
		<thead>
			<tr align="center">
				<th>ID dịch vụ</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th>Video</th>
                <th>ID dịch vụ</th>
                <th>Ngày đăng</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
        @foreach($blogs as $blog)
        <tr style=" text-align: center;">
            <td>{{$blog->id}}</td>
            <td>{{$blog->tieude}}</td>
            <td>{{$blog->noidung}}</td>
            <td><iframe width="200" height="100" src="https://www.youtube.com/embed/{{$blog->video}}"></iframe></td>
            <td>{{$blog->dichvu_id}}</td>
            <td>{{$blog->created_at}}</td>
            <td style="width: 100px;display: flex;">
            <span>
                <button><a style="text-decoration: none;" href="/Admin/blog/{{$blog->id}}/edit">Sửa</a> </button>
            </span>
            - 
            <span>
                <form action="/Admin/blog/{{$blog->id}}" method="POST">
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
    {{$blogs->links()}}
<!--	Thanh phân trang-->
@endsection