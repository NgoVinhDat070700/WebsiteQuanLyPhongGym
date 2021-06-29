@extends('layouts.layouts_home')
@section('content_home')
<div class="giua1" style="padding-top: 90px;">
			<img src="{{asset('images/img-dichvu/goi-tap-fulltime.jpg')}}" width="1296px" height="500px" alt="">
			<div class="anhde" style="padding-top: 90px;">
					<br>
					<h1  style="color: yellow; font-size: 40px; font-weight: 700;margin-left: 5px;">Dịch Vụ tại Swequity</h1>
					<hr width="300px" style="height: 5px; background: yellow; border: none;margin-left: 30px;">
					<br>
                    <p style="font-size: 22px; color: #FFF; margin-left: 10px;">Các dịch vụ tại Swequity cung cấp cho bạn:<br>Sự săn chắc cơ thể với Gym<br>Giảm mỡ toàn thân khi tập Boxing<br>Trải nghiệm tinh hoa Yoga Ấn Độ<br></p>
                    <a href="/Client/DangKyDichVu" style="margin-top: 15px;">Đăng Ký Ngay</a>
			</div>
</div>
<center><h1>Dịch vụ {{$dichvu->tendichvu}}</h1></center>
<div class="motadv" style="padding-left: 250px;">
	<img src="{!!asset('images/img-dichvu/').'/'.$dichvu->image!!}" style="width: 400px;height: 250px;">
	<div class="thongtin">
		<h1>Vì sao bạn nên chọn {{$dichvu->tendichvu}}</h2>
		<div style="font-size: 20px;">
			{{$dichvu->mota}}
		</div>
		<p style="font-size: 20px;"><span>Giá dịch vụ khi đăng kí:</span>{{number_format($dichvu->gia, 0, ',', '.')}} VNĐ</p>
	</div>
</div>
<center>
	<h1>Huấn luyện viên hàng đầu của chúng tôi với kinh nghiệm về {{$dichvu->tendichvu}}</h1>
	Bạn có một thân hình trong mơ? Chúng tôi sẽ giúp bạn sở hữu nó.
	<hr style="width: 200px; height: 5px; background-color: red;">
</center>
<div class="dv_hlv">
@foreach($huanluyenvien as $hlv)
		<div class="chuyengia" style="padding-left: 70px;">
				<div class="anhcg">
				<img src="{!!asset('images/img-coach/').'/'.$hlv->image!!}">
				</div>
				<div class="ttcg">
					<div class="ttcg1">
						<p style="font-size: 22px; font-weight:700">Tên:{{$hlv->tenkhachhangmua}}</p>
						<p>HLV</p>
					</div>
					<div class="ttcg2">
						<i class="fas fa-square" style="color: red"></i>
						<span>Kinh nghiệm:{{$hlv->kinhnghiem}}</span>
						<br>
						<br>
						<i class="fas fa-square" style="color: red"></i>
						<span>Lương:{{$hlv->luong}}</span>
						<br>
						<br>
						<i class="fas fa-square" style="color: red"></i>
						<span>Mô tả:{{$hlv->mota}}</span>
						<br>
						<br>
						<i class="fas fa-square" style="color: red"></i>
						<span>Choreographer các chương trình tại Việt Nam và Châu Á (PowerX, Pop Dance, Killer Cycle, Pop Kids).</span>
					</div>
				</div>
				<div class="clear"></div>
			</div>
            @endforeach
</div>
<div class="See"><a href="/Client/HuanLuyenVien">Xem Thêm</a></div>
<center >
	<h1>Kết quả đạt được sau 3 tháng tham gia</h1>
	<hr style="width: 200px; height: 5px; background-color: red;">
</center>
<div class="ketqua">
	<div class="ketqua1">
		<img src="{{asset('images/img-dichvu/result-1.png')}}">
		<div class="thongtin">
			<li>Nhức mỏi toàn bộ cơ thể</li>
			<li>Thích nghi dần với nhịp độ</li>
			<li>Cảm nhận lượng calories tiêu thụ rõ rệt sau mỗi buổi học</li>
		</div>
	</div>
	<div class="ketqua1">
		<img src="{{asset('images/img-dichvu/result-2.png')}}">
		<div class="thongtin">
			<li>Cơ thể trở nên khoẻ khoắn, săn chắc hơn.</li>
			<li>inh thần sảng khoái, cảm thấy bứt rứt khi không đến phòng tập</li>
		</div>
	</div>
	<div class="ketqua1">
		<img src="{{asset('images/img-dichvu/result-3.png')}}">
		<div class="thongtin">
			<li>Đường cong cơ thể xuất hiện rõ rệt ở vùng ngực – eo - mông</li>
			<li>Gia tăng cảm giác tự tin về hình thể</li>
		</div>
	</div>
</div>
<div class="See"><a href="/Client/DangKyDichVu">Đăng Ký Ngay</a></div>
@endsection