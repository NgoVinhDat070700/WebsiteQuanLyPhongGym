@extends('layouts.layouts_home')
@section('content_home')
<div class="bt" style="margin-left: 125px; padding-top: 90px;">
<br>
<h1 align="center">Các Blog hướng dẫn tập hiệu quả cho bạn</h1>
<br>
<br>
	@foreach($blog as $bl)				
		<div class="bt1" style="margin-top: 40px;">
			<p style="width: 300px; height: 200px"><iframe width="300" height="200" src="https://www.youtube.com/embed/{{$bl->video}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></p>
            <p style="font-size: 20px; font-weight: bold;">{{$bl->tieude}}</p>
            <p>Ngày đăng:{{$bl->updated_at}}</p>
        </div>
    @endforeach
</div>
<br>
<br>
@endsection