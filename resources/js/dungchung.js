
		var vitri = 0;
		var anh = ['web-banner-1.jpg','web-banner-1-1.jpg','web-banner-2-1.jpg','web-banner-3-1.jpg'];
		function chuyen()
		{
			var b = document.getElementById('a');
			b.src = '../images/img-index/' + anh[vitri];
			vitri++;
			if(vitri == anh.length)
				{
					vitri = 0;
				}
			setTimeout('chuyen()',2000);
		}
		$(document).ready(function(){
		$("a#giohang").click(function(event){
			event.preventDefault();
			var href = $(this).attr("href");
			$.get(href,function(data){

				//thành công
			});
		});
		
		$("#timkiem").click(function(){
			var ma_nhomsp = $("#ma_nhom").val();
			var tensp = $("#tsp").val();
//			alert("Thanh");
				if(ma_nhomsp == "" && tensp == "")
					{
						alert("yêu cầu chọn");
					}
				else
					{
						$.get("tim_kiem_sp.php",{ma_nhom:ma_nhomsp,tsp:tensp},function(data){
							$(".sanpham").html(data);
						});
					}
			});
			
		});
		function kiemtraname()
		{
			var ten = document.myForm.hoten;
			if(ten.value == "")
				{
					document.getElementById('erroname').innerHTML = "! Bạn không được bỏ trống tên";
					document.getElementById('erroname').style.color = 'red';
					ten.style.background = 'red';
					return false;
				}
			else if(isNaN(ten.value) == false)
				{
					document.getElementById('erroname').innerHTML = "! Bạn nhập sai tên";
					document.getElementById('erroname').style.color = 'red';
					ten.style.background = 'red';
					return false;
				}
			else
				{
					document.getElementById('erroname').innerHTML = "";
					return true;
				}
			
		}
		function kiemtradiachi()
		{
			var diachi = document.myForm.diachi;
			if(diachi.value == "")
				{
					document.getElementById('errodiachi').innerHTML = "! Bạn không được bỏ trống tên";
					document.getElementById('errodichi').style.color = 'red';
					diachi.style.background = 'red';
					return false;
				}
			else if(isNaN(diachi.value) == false)
				{
					document.getElementById('errodiachi').innerHTML = "! Bạn nhập sai tên";
					document.getElementById('errodiachi').style.color = 'red';
					diachi.style.background = 'red';
					return false;
				}
			else
				{
					document.getElementById('errodiachi').innerHTML = "";
					return true;
				}
			
		}
		function kiemtrasdt()
		{
			var dd = document.myForm.sdt;
			var dd1 = /^0\d{9}$/;
			if(dd.value == "")
				{
					document.getElementById('errodt').innerHTML = "! Bạn không được bỏ trống số điện thoại";
					document.getElementById('errodt').style.color = 'red';
					dd.style.background = 'red';
					return false;
				}
			else if(dd1.test(dd.value) == false)
				{
					document.getElementById('errodt').innerHTML = "! Bạn nhập sai số điện thoại";
					document.getElementById('errodt').style.color = 'red';
					dd.style.background = 'red';
					return false;
				}
			else{
				document.getElementById('errodt').innerHTML = "";
				return true;
			}
		}
		function kiemtraemail()
		{
			var A = document.myForm.email;
			var er1 = /^\w+@\w+(\.\w+){1,2}$/;
			if(A.value == "")
				{
					document.getElementById('erroemail').innerHTML = "! Bạn không được để trống email";
					document.getElementById('erroemail').style.color = 'red';
					A.style.background = "red";
					return false;
					
				}
			else if(er1.test(A.value) == false)
				{
					document.getElementById('erroemail').innerHTML = "Bạn nhập email sai";
					document.getElementById('erroemail').style.color = 'red';
					A.style.background = "red";
					return false;
				}
			else{
				document.getElementById('erroemail').innerHTML = "";
				return true;
			}
		}
		function mau(obj)
		{
			obj.style.background = "#FFF";
		}
		function kiemtraSelect()
		{
			if(document.myForm.sl.selectedIndex == 0)
				{
					document.getElementById('erros').innerHTML = "! Bạn phải chọn cơ sở";
					document.getElementById('erros').style.color = "red";
					document.myForm.sl.style.background = 'red';
					return false;
				}
			else{
				document.getElementById('erros').innerHTML = "";
			}
		}
		function kiemtranc()
		{
			if(document.getElementById('nc').value == "")
				{
					document.getElementById('erronc').innerHTML = "! Bạn hãy viết như cầu";
					document.getElementById('erronc').style.color = 'red';
					document.getElementById('nc').style.border = '2px solid red';
					return false;
				}
			else
				{
					document.getElementById('erronc').innerHTML = "";
					document.getElementById('nc').style.border = '2px solid black';
					return true;
				}
		}
		function gui()
		{
			if(kiemtraname() == false || kiemtraemail() == false || kiemtranc() == false || kiemtrasdt() == false)
				{
					alert("Bạn phải nhập đủ");
				}
			else{
				alert("Bạn đã gửi thành công!!!");
			}
		}