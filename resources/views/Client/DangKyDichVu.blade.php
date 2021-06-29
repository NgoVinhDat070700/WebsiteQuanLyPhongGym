@extends('layouts.layouts_home')
@section('content_home')
<div id="Main" style="z-index: 100;padding-top: 102px;">
    <div class="trai">
        <div class="nd">
            <!--					======================================Địa chỉ===========================-->
            <h1>ĐỊA CHỈ</h1>
            <hr width="80px" style="margin-left: 0px; height: 3px; background: yellow; border: none;">
            <div>
                <p><b>SUF 1 LƯƠNG YÊN:</b>
                    <br>Tầng 10 Hanoi Creative City, 01 Lương Yên, Hai Bà Trưng, Hà Nội
                </p>
                <br>

                <p><b>SUF 2 KIM MÃ:</b>
                    <br>Tầng 3, 523 Kim Mã, Ba Đình, Hà Nội
                </p>

                <br>
                <p><b>SUF 3 LÊ VĂN THIÊM:</b>
                    <br>Tầng 6 tòa D, 15 Lê Văn Thiêm, Thanh Xuân, Hà Nội
                </p>
            </div>
            <br>
            <!--					======================================Thông tin===========================-->
            <h1>THÔNG TIN LIÊN LẠC</h1>
            <hr width="350px" style="margin-left: 0px; height: 3px; background: yellow; border: none;">
            <br>
            <p><b>HOTLINE:</b> 1900.2208<br>
                <b>EMAIL:</b> info@swequity.vn</p>
            <br>
            <!--					======================================follow===========================-->
            <h1>FOLLOW US</h1>
            <hr width="350px" style="margin-left: 0px; height: 3px; background: yellow; border: none;">
            <br>
            <img src="{{asset('images/img-lienhe/fb.png')}}">
            <img src="{{asset('images/img-lienhe/yt.png')}}">
            <img src="{{asset('images/img-lienhe/489396-70x70.png')}}">
        </div>

    </div>

    <div class="phai">
        <!--					======================================tư vấn miễn phí==========================-->
        <h1>Đăng Ký</h1>
        <hr width="350px" style="margin-left: 0px; height: 3px; background: yellow; border: none;">
        <p style="color: #5E5B5B;">Liên hệ với chúng tôi để nhận thông tin về các gói tập và dịch vụ</p>
        <h3>    
        @if(session()->has('message'))
        <div>{{ session()->get('message')}}</div>
        @endif
        </h3>
        <br>
        <br>
        <form name="myForm" id="myForm" action="{{route('Client/DangKyDichVu')}}" method="POST">
        @csrf
            <p style="color: #5E5B5B; font-size: 22px;">Tên của bạn*<br><input type="text" name="tTenkhachhang" id="tTenkhachhang" onFocus="mau(this)" onBlur="kiemtraname()" style="height: 25px; width: 600px;"></p>
            <p id="erroname"></p>
            <p style="color: #5E5B5B; font-size: 22px;">Số điện thoại*<br><input type="text" onFocus="mau(this)" onBlur="kiemtrasdt()" value="" name="tSodienthoai" id="tSodienthoai" style="height: 25px; width: 600px; z-index: 9999;"></p>
            <p id="errodt"></p>
            <p style="color: #5E5B5B; font-size: 22px;">Email*<br><input type="text" name="tEmail" id="tEmail" onFocus="mau(this)" onBlur="kiemtraemail()" style="height: 25px; width: 600px;"></p>
            <p id="erroemail"></p>
            <p style="color: #5E5B5B; font-size: 22px;">Hãy cho chúng tôi biết về nhu cầu của bạn*<br>
                <textarea rows="9" cols="83" id="nc" onBlur="kiemtranc()" name="tNhucau" id="tNhucau"></textarea>
            </p>
            <p id="erronc"></p>
            <p>
             <p for=""  style="color: #5E5B5B; font-size: 22px;">Id dịch vụ:</p>
             <p  style="color: #5E5B5B; font-size: 22px;">
                <select id="iddichvu" name="iddichvu" style="width:600px;height:30px; font-size: 16px;"> <br> <br>
                    @foreach($dichvu as $dv)     
                    <option value="{{$dv->id}}" style="font-size: 16px;">{{$dv->tendichvu}}</option>
                    @endforeach
                </select>
             </p>
            </p>
            <input type="submit" name="button" value="ĐĂNG KÝ" style="height: 50px; width: 300px; background: red; border:none; border-radius: 5px;" >
        </form>
    </div>
    @if(session()->has('message'))
        <div>{{ session()->get('message')}}</div>
    @endif
    <div class="clear"></div>
    <br>
    @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                <li></li>
                @endforeach
            </ul>
        </div>

    @endif

</div>
@endsection