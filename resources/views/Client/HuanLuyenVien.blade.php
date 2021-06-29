@extends('layouts.layouts_home')
@section('content_home')
		<div id="banner" style="padding-top: 102px;">
			<div class="giua1">
				<img src="{{asset('images/img-coach/sss3.jpg')}}" width="1296px" height="500px">
				<div class="anhde">
					<br>
					<h1 align="center" style="color: yellow; font-size: 60px; font-weight: 700;">ĐỘI NGŨ COACH</h1>
					<hr width="100px" style="height: 5px; background: yellow; border: none;">
					<br>
					<p align="center" style="font-size: 22px; color: #FFF;">Đội ngũ coach của Swequity được sàng lọc kĩ càng, phải trải qua giai đoạn trainning<br> ít nhất 3 tháng để có đủ kĩ năng giao tiếp và kiến thức chuyên môn<br> hướng dẫn cho khách hàng</p>
				</div>
			</div>
		</div>
		<br>
			<br>
		<div id="Maincontent">
        @foreach($huanluyenvien as $hlv)
		<div class="chuyengia" style="margin-left: 100px;">
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
			<div class="clear"></div>
			{{$huanluyenvien->links()}}
			<div>
				<h1 align="center">Đội ngũ giàu kinh nghiệm với nền tảng kiến thức vững chãi</h1>
				<hr width="300px" style="height: 5px; background: yellow; border: none;">
				<br>
				<div class="ndkn">
					<center><img src="{{asset('images/img-coach/083358.jpg')}}"></center>
					<p class="text-justify">
						<br>
						Đội ngũ Coach của Swequity không chỉ là người làm dịch vụ, họ còn là người anh em, người đồng đội, người thầy, người huấn luyện của riêng bạn. Họ vừa thúc đẩy bạn vượt qua mọi ranh giới, giới hạn của bản thân, vừa là chỗ dựa tinh thần khi bạn cảm thấy mỏi mệt, muốn từ bỏ.
						<br>
						<br>
						Chúng tôi kinh doanh dựa trên nền tảng tri thức, nên mỗi người coach đều có bề dày kiến thức và kinh nghiệm. Không chỉ hiểu biết sâu rộng về lĩnh vực sức khỏe, dinh dưỡng và giải phẫu học về cơ và chuyển động của cơ thể người; họ còn là những người đồng hành đầy trách nhiệm và năng lượng để thúc đẩy hội viên vươn tới những giới hạn mới.
						<br>
						<br>
						Hiểu được nhu cầu và thể trạng mỗi người một khác, không có chương trình tập luyện nào phù hợp cho tất cả. Vì thế với từng khách hàng, các coach đều có quá trình tìm hiểu, nghiên cứu, phân tích tình trạng cơ thể một cách kỹ lưỡng, và thiết kế ra chương trình tập luyện phù hợp dành riêng cho họ.
					</p>
				</div>
				
			</div>
			<br>
			<br>
			<div class="ppdt">
				<h1 align="center">Phương pháp đào tạo Coach tại SUF</h1>
				<hr width="150px" style="height: 5px; background: yellow; border: none;">
				<br>
				<div class="ndkn">
					<center><img src="{{asset('images/img-coach/083357_unnamed.jpg')}}"></center>
					<p class="text-justify">
						<br>
						Đội ngũ coach ở Swequity phải trải qua một chương trình đào tạo 3 tháng bài bản và thực hiện những bài kiểm tra kiến thức ngặt nghèo. Chỉ những người xuất sắc nhất mới được giữ lại và trở thành coach chính thức ở Swequity.
					<br>
					<br>
					Phương pháp đào tạo của chúng tôi chú trọng vào kiến thức chuyên môn, kĩ năng sư phạm và kĩ năng tìm hiểu, phân tích, chẩn đoán vấn đề cơ thể, để mỗi người coach đều đủ năng lực thiết kế ra chương trình luyện tập mang lại hiệu quả cho khách hàng.
					</p>
				</div>
			</div>
			<br>
			<br>
			</div>

			<!--		==========================chuyên gia 4========================-->
		</div>
		<br><br>
		<a href="dangky.php" style="text-decoration: none">
			<div class="dk">
				<p style="margin-top:15px" >ĐĂNG KÝ NGAY</p>
				<div class="dk1"></div>
			</div>
		</a>
				
		
<!--			======================================jcoach======================================-->
			
	</div>
        <!--	============================================Cuối=========================-->
@endsection