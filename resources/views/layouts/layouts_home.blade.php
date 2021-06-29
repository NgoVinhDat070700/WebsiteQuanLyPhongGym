<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Gym EPU</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/trangchinh.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/sanpham.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/icon_cart.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lienhe.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bt.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bt_nguc.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('icon/fontawesome-free-5.13.1-web/fontawesome-free-5.13.1-web/css/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/giohang.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/coach.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/dichvu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/thong_tin_san_pham.css')}}">
    <!--Start of AutoAds Tracking Code-->
    <!-- <script id='autoAdsMaxLead-widget-script' src='https://cdn.autoads.asia/scripts/autoads-maxlead-widget.js?business_id=C6FBC3DEED0245FE800642AFB36F739B' type='text/javascript' charset='UTF-8' async></script> -->
    <!--End of AutoAds Tracking Code-->
    <script type="text/javascript" src="{{asset('js/dungchung.js')}}"></script>
</head>

<body>
    <div id="Tong">
    <nav class="menu_header">
        <div class="logo">
            <img src="{!!asset('images/img-index/Logo.png')!!}" alt="">
        </div>
        <ul>
                <li><a href="/Client/Trangchu">Trang chủ</a></li>
                <li><a href="/Client/SanPham">Sản phẩm</a></li>
                @include('layouts.menudacap')
                
                <li><a href="/Client/GioHang">Giỏ Hàng</a></li>
                <li><a href="/Client/DangKyDichVu">Đăng Ký</a></li>
            </ul>
        </nav>
        @yield('content_home')
        <div class="logo" style="margin-top: 100px; display: inline-flex;">
            <img src="{{asset('images/img-trangchinh/logo-cen.png')}}">
            &ensp;&ensp;
            <img src="{{asset('images/img-trangchinh/logo-kid.png')}}">
            &ensp;
            &ensp;
            <img src="{{asset('images/img-trangchinh/logo-ufc.png')}}">
            &ensp;
            &ensp;
            <img src="{{asset('images/img-trangchinh/logo-yoga.png')}}">
        </div>
        <br>
        <center><strong>CỔNG THÔNG TIN ĐIỆN TỬ TRƯỜNG ĐẠI HỌC ĐIỆN LỰC - EPU</strong></center>
        <center>Giấy phép hoạt động: 177/GP-BC cấp ngày 29/10/2004 của Cục Báo chí-Bộ Văn hoá Thông tin</center>
        <center>Bản quyền: Trường Đại Học Điện Lực - 235 Hoàng Quốc Việt - Quận Bắc Từ Liêm - Hà Nội</center>
        <center>Người thực hiện: Ngô Vĩnh Đạt - Nguyễn Minh Nghĩa - Email:sinhvienepu@gmail.com</center>
        <center>0969168364</center>
        <br>
        <center><img src="{{asset('images/img-index/logoSaleNoti.png')}}" width="400px" height="160px"></center>
    </div>
</body>

</html>