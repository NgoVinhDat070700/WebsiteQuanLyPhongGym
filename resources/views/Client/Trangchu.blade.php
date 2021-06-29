@extends('layouts.layouts_home')
@section('content_home')
		<div id="MainContent" style="padding-top: 90px;">
			<div class="chuyenanh">
				<img src="{{asset('images/img-index/web-banner-1.jpg')}}" id="a" width="1296px" height="500px">
				<script>
					chuyen();
				</script>
			</div>
			<br>
			<br>
			<div class="anh1">
				<img src="{{asset('images/img-trangchinh/Banner-nho.jpg')}}" width="373px" height="185px">
				<img src="{{asset('images/img-trangchinh/BANNER-2.png')}}">
				<img src="{{asset('images/img-trangchinh/banner-3.png')}}">	
			</div>
			<br>
			<br>
			
			<div>
				<h1 align="center">Các dịch vụ tập luyện và<br> Những Cách Gảm Cân Hiệu Qủa</h1>
				<hr width="100px" style="height: 5px; background: yellow; border: none;">
			</div>
			<br>
			<br>
			
<!--			===============Huấn Luyện Viên============-->
			<div class="tonganh">
				
					<div class="anh2">
						<div class="zoom">
							<p><img src="{{asset('images/img-trangchinh/che-do-an-khi-tap-gym-giam-can.jpg')}}">
							</p>
							<div class="mau1">
							</div>
							<div class="chu">
								<h1>Huấn Luyện Viên</h1>
							</div>
						</div>	
				</div>
				
				
<!--				===============Yoga============-->
				<div class="anh2">
					<div class="zoom">
						<p><img src="{{asset('images/img-trangchinh/huong-dan-bai-tap-yoga-7-ngay-giam-mo-bung.1587697899.jpg')}}"></p>
					
						<div class="mau1">
						</div>
						<div class="chu">
							<h1>Yoga</h1>
						</div>
					</div>
				</div>
				<div class="anh2">
					<div class="zoom">
						<p><img src="{{asset('images/img-trangchinh/an-thom-co-giam-can-khong-an-nhu-the-nao-de-giam-can-nhanh-nhat.1584514860.jpg')}}"></p>
						<div class="mau1">
						</div>
						<div class="chu">
							<h1>Giảm cân</h1>
						</div>
					</div>
				</div>
				
				
<!--				===============Dance============-->
				<div class="anh2">
					<div class="zoom">
						<p><img src="{{asset('images/img-trangchinh/unnamed.jpg')}}"></p>
						<div class="mau1">
						</div>
						<div class="chu">
							<h1>Dance</h1>
						</div>
					</div>
				</div>
				
				
<!--				===============Giảm căng cơ============-->
				<div class="anh2">
					<div class="zoom">
						<p><img src="{{asset('images/img-trangchinh/massage.jpg')}}"></p>
						<div class="mau1">
						</div>
						<div class="chu">
							<h1>Giảm căng cơ</h1>
						</div>
					</div>
				</div>
				
				
<!--				===============KickFit============-->
				<div class="anh2">
					<div class="zoom">
						<p><img src="{{asset('images/img-trangchinh/h3.png')}}" width="400px" height="400px"></p>
						<div class="mau1">
						</div>
						<div class="chu">
							<h1>KickFit</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--		============================Các thương hiệu liên kết khác=======================-->
		<br>
		<br>
		
		<div>
			<h1 align="center">Các thương hiệu liên kết khác</h1>
			<hr width="100px" style="height: 5px; background: hsl(148, 89%, 52%); border: none;">
		</div>
		<br>
		<br>
		<br>
		<div>
<!--		===============Thương hiệu 1============-->
		<div class="cacth">
			<div class="k">
				<img src="{{asset('images/img-trangchinh/logo-ufc.png')}}">
			</div>
			<p style="font-size: 18px; margin-left: 15px">
				<b>THẢO ĐIỀN PEARL PLAZA</b>
			</p>
			<div class="chu2">
				<p style="margin-left: 5px">Tầng 3, 12 Quốc Hương, P. Thảo Điền, Q. 2, TP.HCM</p>
			</div>
			
			
			<p style="font-size: 18px; margin-left: 15px">
				<b>AEON MALL TÂN PHÚ</b>
			</p>
			<div class="chu2">
				<p style="margin-left: 5px">30 Bờ Bao Tân Thắng, P.Sơn Kỳ, Quận Tân Phú, TP.HCM</p>
			</div>
		</div>
		
		<!--		===============Thương hiệu 2============-->
		<div class="cacth" style="margin-top: 3px;">
			<div class="k">
				<img src="{{asset('images/img-trangchinh/logo-yoga.png')}}">
			</div>
			<p style="font-size: 18px; margin-left: 15px">
				<b>AEON MALL BÌNH TÂN</b>
			</p>
			<div class="chu2" style="border-left: 3px solid hsl(204, 86%, 40%)">
				<p style="margin-left: 5px">Tầng 2, số 01 đường số 17A, khu phố 11, P. Bình Trị Đông B, Q. Bình Tân, TP.HCM</p>
			</div>
			
			
			<p style="font-size: 18px; margin-left: 15px">
				<b>THẢO ĐIỀN PEARL PLAZA</b>
			</p>
			<div class="chu2" style="border-left: 3px solid hsl(204, 86%, 40%)">
				<p style="margin-left: 5px">3Tầng 3, 12 Quốc Hương, P. Thảo Điền, Q. 2, TP.HCM</p>
			</div>
		</div>
		
		<!--		===============Thương hiệu 3============-->
		<div class="cacth" style="margin-top: -30px;">
			<div class="k">
				<img src="{{asset('images/img-trangchinh/logo-cen.png')}}">
			</div>
			<p style="font-size: 18px; margin-left: 15px">
				<b>SAIGON CENTRE</b>
			</p>
			<div class="chu2" style="border-left: 3px solid yellow">
				<p style="margin-left: 5px">Lầu 5, 65 đại lộ Lê Lợi, P.Bến Nghé, quận 1, TP.HCM</p>
			</div>
			
			
			<p style="font-size: 18px; margin-left: 15px">
				<b>THE LANDMARK 81</b>
			</p>
			<div class="chu2" style="border-left: 3px solid yellow">
				<p style="margin-left: 5px">Lầu 3, 720A Điện Biên Phủ, Phường 22, Quận Bình Thạnh, TP.HCM</p>
			</div>
			
			<p style="font-size: 18px; margin-left: 15px">
				<b>WEST POINT</b>
			</p>
			<div class="chu2" style="border-left: 3px solid yellow">
				<p style="margin-left: 5px">Số 2, ĐườngTây Hồ, P. Quảng An, Q. Tây Hồ, Hà Nội</p>
			</div>
			
			<p style="font-size: 18px; margin-left: 15px">
				<b>ROYAL CITY</b>
			</p>
			<div class="chu2" style="border-left: 3px solid yellow">
				<p style="margin-left: 5px">72A Nguyễn Trãi, P. Thượng Đình, Quận Thanh Xuân, Hà Nội</p>
			</div>
		</div>
		
		<!--		===============Thương hiệu 4============-->
		<div class="cacth" style="margin-top: -22px;">
			<div class="k">
				<img src="{{asset('images/img-trangchinh/logo-kid.png')}}">
			</div>
			<p style="font-size: 18px; margin-left: 15px">
				<b>CALIKIDS ACADEMY</b>
			</p>
			<div class="chu2" style="border-left: 3px solid hsl(22, 90%, 54%)">
				<p style="margin-left: 5px">Tầng 3, 12 Quốc Hương, P. Thảo Điền, Q. 2, TP.HCM</p>
			</div>
			
		</div>
		<div class="clear"></div>
		</div>
<!--		====================Gặp gỡ những chuyên gia thể hình hàng đầu==================-->
		<br>
		<br>
		
		<div>
			<h1 align="center">Gặp gỡ những chuyên gia thể hình hàng đầu</h1>
			<p align="center">Dù bạn yêu thích Yoga, đam mê bộ môn Dance đầy sôi động, hay môn võ MMA cực mạnh mẽ. Bạn sẽ luôn được hướng dẫn bởi những<br>chuyên gia hàng đầu.</p>
              <br>
			<center><a style="text-decoration: none;" href="/Client/HuanLuyenVien">Xem tại đây</a></center>
		</div>
		
		<br><br>
		<a href="/Client/DangKyDichVu" style="text-decoration: none">
			<div class="dk">
				<p style="margin-top: 15px;">Đăng Ký</p>
				<div class="dk1"></div>
			</div>
		</a>
		
<!--		==================Câu chuyện thành công===================-->
		<div class="cctc">
			<br>
			<br>
			<br>
			<div>
				<h1 align="center">Câu chuyện thành công</h1>
				<p align="center">Khám phá phương pháp đã giúp thay đổi cuộc sống của hàng trăm ngàn người tại Việt Nam, giúp họ thay đổi<br> hoàn toàn cơ thể bằng phương pháp giảm cân nhanh nhất, truyền cảm hứng và đạt được vẻ ngoài như mơ ước.</p>
				  <br>
				<hr width="100px" style="height: 5px; background: red; border: none;">
			</div>
			<div class="anh3">
				<img src="{{asset('images/img-trangchinh/hoivien1.png')}}" class="a" id="0" >
				<img src="{{asset('images/img-trangchinh/hoivien2.png')}}" id="1">
				<img src="{{asset('images/img-trangchinh/hoivien3.png')}}" id="2" >
				<img src="{{asset('images/img-trangchinh/hoivien4.png')}}" id="3" >
				<img src="{{asset('images/img-trangchinh/hoivien5.png')}}" id="4">
				<div class="nut">	
					<i class="fas fa-chevron-circle-left" id="prev"></i>
					<i class="fas fa-chevron-circle-right" style="margin-left: 1030px;" id="next"></i>
				</div>
				<script>
					
					$(document).ready(function(){
						var stt = 0;
						
						var imglast = $(".anh3 img:last").attr("id");
						$(".anh3 img").each(function(){
							if($(this).is(':visible'))
								{
									stt = $(this).attr("id");
								}
						});
						$("#next").click(function(){
							if(stt == imglast)
								{
									stt = -1;
								}
							next = ++stt;
							$(".anh3 img").fadeOut(3000);
							$(".anh3 img").eq(next).fadeIn(3000);
						});
						$("#prev").click(function(){
							if(stt == -1)
								{
									stt = imglast;
								}
							prev = --stt;
							$(".anh3 img").fadeOut(3000);
							$(".anh3 img").eq(prev).fadeIn(3000);
						});
						setInterval(function(){
							$("#next").click();
						},4000);
					});
				</script>
				
			</div>
			<a href="#" style="text-decoration: none">
					<div class="dk" style="width: 500px; margin-top: -10px;">
						<p style="margin-top: 15px;">XEM THÊM CÂU CHUYỆN CỦA HỘI VIÊN</p>
						<div class="dk1" style="width: 500px;"></div>
					</div>
				</a>
		</div>
<!--		===========================Các hội viên nổi tiếng===========================-->
		<div>
			<br>
			<br>
			<br>
			<div>
				<h1 align="center">Các hội viên nổi tiếng</h1>
				<p align="center">Chúng tôi luôn là lựa chọn hàng đầu cho các chính trị gia, ngôi sao giải trí, người mẫu thời trang và doanh<br> nhân khi họ bắt đầu tập luyện.</p>
				  <br>
				<hr width="100px" style="height: 5px; background: red; border: none;">
				<br>
				<br>
			<div class="chvnt">
				<img src="{{asset('images/img-trangchinh/swe.png')}}" height="600px" style="opacity: 0.7;">
<!--				====================Kỳ Duyên====================-->
				<a href="">
					<div class="chvnt1 anhtron1"></div>
					<div class="chvnt2">
						<p>Kỳ Duyên</p>
					</div>
				</a>
<!--				====================Phạm Hương====================-->
				<a href="">
					<div class="chvnt3 anhtron2"></div>
					<div class="chvnt4">
						<p>Phạm Hương</p>
					</div>
				</a>
<!--				====================Hồ Vĩnh Khoa====================-->	
				<a href="">	
					<div class="chvnt5 anhtron3"></div>
					<div class="chvnt6">
						<p>Hồ Vĩnh Khoa</p>
					</div>
				</a>
<!--				====================Vũ Cát Tường====================-->						
				<a href="">	
					<div class="chvnt7 anhtron4"></div>
					<div class="chvnt8">
						<p>Vũ Cát Tường</p>
					</div>
				</a>
			</div>
			
			</div>
			<div class="clear"></div>

		</div>
<!--				====================Bài tập hữu ích nhất====================-->		
			<br>
			<br>
			<br>
			<div>
				
            </div>
@endsection