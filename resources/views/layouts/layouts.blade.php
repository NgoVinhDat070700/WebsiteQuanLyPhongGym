<html>
<head>
<meta charset="utf-8">
<title>Trang Chủ admin</title>
<link rel="stylesheet" href="icon/fontawesome-free-5.13.1-web/fontawesome-free-5.13.1-web/css/all.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="{{asset('css/main.css')}}" rel="stylesheet">
<link href="{{asset('css/inhoadon.css')}}" rel="stylesheet">
</head>
<body>
		
	<div id="Tong">
		<div id="themmenu"></div>
		<div id="ngang">
			<img  src="{{asset('images/img-index/Logo.png')}}">
		</div>
		<div id="giua">
			<div class="left">
				<ul class="menudoc">
					<li>&ensp;<a id="navbarDropdown" class="nav-link dropdown-toggle" href="/Admin/index" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hello :{{ Auth::user()->name }} <span class="caret"></span>
								</a>
					</li>
					<li>&ensp;<a href="/Admin/dichvu" id="nv" >Quản lý dịch vụ</a></li>
					<li>&ensp;<a href="/Admin/huanluyenvien" id="nv" >Quản lý nhân viên</a></li>
					<li>&ensp;<a href="/Admin/khachhang" id="kh" >Quản lý khách hàng</a></li>
					<li>&ensp;<a href="/Admin/loaisanpham" id="kh" >Quản lý loại sản phẩm</a></li>
					<li>&ensp;<a href="/Admin/sanpham" id="sp" >Quản lý sản phẩm</a></li>
					<li>&ensp;<a href="/Admin/blog" id="bt" >Quản lý Blogs</a></li>
					<li>&ensp;<a href="/Admin/donhang" id="bt" >Quản lý đơn hàng</a></li>
					<li>&ensp;<a href="/Admin/thongke" id="bt" >Thống kê</a></li>
					<li >

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
				</ul>
			</div>
			<div class="right">
                @yield('content')
			</div>
		</div>
		
		<div class="clear"></div>
		<div id="footer"></div>
	</div>
	</body>
</html>