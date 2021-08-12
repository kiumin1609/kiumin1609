<?php include 'ketnoi.php'; 
  session_start();

?>
<?php 
  if(isset($_POST['submit'])){    
    if(isset($_POST['username'])&&isset($_POST['password'])){
      $user = $_POST['username'];
      $pass = md5($_POST['password']);  

      $sql = " SELECT * FROM member WHERE username = '".$user."' AND password = '".$pass."'";     
      $query = mysqli_query($conf, $sql);     
   
      if(mysqli_num_rows($query)>0){ 
        $user = mysqli_fetch_assoc($query);

        $_SESSION['username'] = $user;
          echo "<script>";
          echo "alert('Đăng nhập thành công');";
          echo "window.location.href='/Project1/reviewpq.php'";
          echo "</script>";
      }

      else{
        echo "<script>";
        echo "alert('Đăng nhập thất bại')";
        echo "</script>";
      } 
    }

  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Du lịch Phú Quốc</title>
	<link rel="icon" type="image/ic" href="kiumin.png">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/Home.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
	<script type="text/javascript" src="assets/js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>
<body>
<header>
	<div class="Header">
		<div class="container">
			<div class="row"> 
				<div id="logo" class="col-md-1">
					<a href="Home.php">
						<img src="logo.png">
					</a>
				</div>
				<div class="col-md-11">
					<div class="Hotel">
						<a href="">
							Khách sạn
						</a>
					</div>
					<div class="Tours">
						<a href="">Tours</a>
					</div>
					<div class="Experience">
						<a href="">
							Trải nghiệm
						</a>
					</div>
					<div class="Help">
						<a href="">Hỗ trợ</a>
					</div>
					<div class="Account">
						<?php if(isset($_SESSION['username'])){ ?>
							
							<button type="button" class="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><?php echo $_SESSION['username']['username']; ?></button>
							<?php }else{ ?>
						<button type="button" class="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tài khoản</button>
						<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  							<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
   								 <div class="modal-content">
      								<div class="modal-header">
       									 <h5 class="modal-title" id="staticBackdropLabel">Đăng nhập/Đăng ký</h5>
        								<button type="button" class="btn-close" 	data-bs-dismiss="modal" aria-label="Close"></button>
        								<form action='' method='POST'>
      								</div>
      									<div class="modal-body">
      										<div id="emaildn">
        										Tên đăng nhập
        									</div>
        									<div id="box1">
        										<label for="tendangnhap"></label>
        										<input type="text" name="username">
											</div>
											<div id="password">Mật khẩu</div>
											<div id="box2">
        										<input type="password" name="password">
											</div>
											
											<a href="">Quên mật khẩu?
											</a>
											<div class="submit">
												<input type="Submit" name="submit" value="Đăng nhập">

											</div>
      									</div>

     									 <div class="modal-footer">
        									<div class="tablogin">
        										<button type="button" class="btn btn-default"><i class="fab fa-facebook-f"></i>
        										Tiếp tục với Facebook</button>
        										
        									</div>
        									<div class="tablogin2">
        										<button type="button" class="btn btn-default">
        											<i class="fab fa-apple"></i>Tiếp tục với Apple
        										</button>
        									</div>
        									<div class="tablogin3">
        										<button type="button" class="btn btn-default">
        											<i class="fab fa-google"></i>Tiếp tục với Google
        										</button>
        									</div>
        									<div class="tabdangki">
        										<a href="Dangki.php">
        										<button type="button" class="btn btn-default">
        											<span>Chưa có tài khoản? Đăng ký ngay
        											</span>
        										</button>
        										</a>
        									</div>
      									</div>
   								 </div>
   								</form>
  							</div>
						</div>
					<?php } ?>
					</div>
					<div class="AccountIcon">
						<a href=""> 
							<i class="far fa-user-circle"></i>
						</a>
					</div>
		
				</div>
	
			</div>
		</div>
	</div>
</header>

<main>
	<div class="imge">
		<img src="phuquoc2.jpeg">
		<h1>3 NGÀY 2 ĐÊM TẠI ĐẢO NGỌC PHÚ QUỐC </h1>
	</div>
	<div class="contentpq">
	<div class="container">
		<div class="row">
			<div class="col-md-8"  >
				<p>Phú Quốc là quần đảo xinh đẹp nằm sâu trong vùng vịnh Thái Lan, thuộc tỉnh Kiên Giang. Ở vùng biển phía Nam của tổ quốc, đảo Ngọc Phú Quốc – hòn đảo lớn nhất của Việt Nam, cũng là đảo lớn nhất trong quần thể 22 đảo tại đây. Nước biển trong vắt, những dòng suối yên bình cùng nhiều hải sản độc đáo chính là lợi thế tuyệt vời của du lịch Phú Quốc.</p>
				<div class="im1">
				<img src="phuquoc3.jpeg"  > <br>
				<p style="text-align: center; font-size: 15px;"><i>Một góc Phú Quốc (ảnh: Lê Đức Lộc)</i></p>
				</div>
				<div class="time">
					<h2>Thời điểm vàng để du lịch Phú Quốc</h2>
					<p>Phú Quốc là hòn đảo lớn và nổi tiếng nhất của Việt Nam với hàng nghìn lượt khách tới tham quan mỗi năm. Là một hòn đảo nhiệt đới gió mùa cận xích đạo và lại nằm trong vịnh Thái Lan cho nên Phú Quốc có nhiều đặc điểm khí hậu khá là khác biệt.</p> 
					<p>Khí hậu nơi đây được chia làm 2 mùa rõ rệt đó là mùa mưa và mùa khô. Do là cửa ngõ đón gió mùa Tây – Tây Nam nên vào mùa mưa thì độ ẩm cao ở đảo rất cao(từ 85 đến 90%). Còn vào mùa khô thì đảo bị chịu ảnh hưởng bởi gió mùa Đông Bắc Nhiệt nên nhiệt độ sẽ tăng cao vào tháng 4 và tháng 5.</p>
					<img src="phuquoc4.jpeg"> <br>
					<p style="text-align: center; font-size: 15px;"><i>Khung cảnh hoàng hôn lãng mạn trên đảo Phú Quốc (ảnh: Lê Đức Lộc)</i></p>
					<p>Theo kinh nghiệm đi du lịch Phú Quốc của chúng tôi thì thời gian đẹp nhất để tới đảo Ngọc là mùa khô. Tức là từ cuối tháng 10 đến tận tháng 3 năm sau, ngoài ra còn có thể kéo dài đến tháng 5 nếu thời tiết thuận lợi. Tại sao lại chọn những tháng nay?  Vào khoảng thời gian này thì thời tiết tại Phú Quốc ít mưa, sóng biển êm đềm, mát mẻ rất thuận lợi cho việc đi du lịch, nghỉ dưỡng.</p>
					<img src="phuquoc5.jpeg"> <br>
					<p style="text-align: center; font-size: 15px;"><i>Grand World Phú Quốc (ảnh: Tâm Lê)</i></p>
					<p>Và đây cũng chính là mùa cao điểm thu hút rất nhiều du khách tới với Phú Quốc. Do đó, nếu mà bạn đi du lịch vào thời điểm này thì hãy tìm hiểu và đặt phòng trước để đảm bảo có một nơi nghỉ ngơi thoải mái khi tới đây. Để tránh trước bị chặt chém phòng nghỉ khi du lịch Phú Quốc nhé.</p>
					<h2>Phương tiện, di chuyển khi du lịch Phú Quốc</h2>
					<p>Phương tiện đến Phú Quốc chủ yếu bằng máy bay, tàu cao tốc hay phà. Dưới đây là các lựa chọn để đến Phú Quốc tùy theo từng điểm xuất phát khác nhau:</p>
					<p> <b>Hà Nội – Phú Quốc:</b> Vietnam Airlines khai thác mỗi ngày 1 chuyến bay Airbus từ Hà Nội đi Phú Quốc khởi hành lúc 8h40 và đến nơi lúc 10h45. Chuyến bay theo chiều ngược lại khởi hành từ Phú Quốc lúc 11h35 và đến nơi lúc 13h40.</p>
					<p><b>TP.HCM – Phú Quốc: </b>Khoảng cách 500 km, có thể đi bằng máy bay hay kết hợp xe ô tô + tàu cao tốc Rạch Giá – Phú Quốc</p>
					<p>- Máy bay: Vietnam Airlines khai thác mỗi ngày 17 chuyến bay với máy bay ATR và 1 chuyến bay với máy bay Airbus. Viet Jet Air cùng khai thác mỗi ngày 1 chuyến bay với máy bay Air Bus. Thời gian bay là 50 phút.
					<br>
					- Xe ô tô + tàu cao tốc Rạch Giá – Phú Quốc: Phương Trang, Kumho và Mai Linh là những hãng xe bus chất lượng cao chuyên chở hành khách tuyến TP.HCM – Rạch Giá và ngược lại, thời gian di chuyển là 6 đến 7 tiếng tùy vào mật độ giao thông.</p> <br>
						<img src="pqap.jpeg"> <br>
						<p style="text-align: center; font-size: 15px;"><i>Sân bay quốc tế Phú Quốc </i></p>
					<p><b>Cần Thơ – Phú Quốc: </b>Có thể đi bằng máy bay hay kết hợp xe ô tô + tàu cao tốc Rạch Giá – Phú Quốc</p>
					<p>
						- Máy bay: Vietnam Airlines khai thác mỗi ngày 1 chuyến bay với máy bay ATR khởi hành từ Cần Thơ đi Phú Quốc lúc 13H:00 và đến nơi lúc 13:45. Chuyến bay theo chiều ngược lại khởi hành từ Phú Quốc lúc 11H:35 và đến nơi lúc 12H:20.
						<br>
						- Xe ô tô + tàu cao tốc Rạch Giá – Phú Quốc: Phương Trang và Mai Linh là 2 hãng xe bus chất lượng cao chuyên chở hành khách tuyến Cần Thơ – Rạch Giá và ngược lại, thời gian di chuyển là 3 đến 3,5 tiếng tùy vào mật độ giao thông.
					</p>
					<h2>Một vài địa điểm vui chơi, check-in đẹp</h2>
						<h3>Hòn Móng Tay</h3>
						<img src="honmongtay.jpeg"> <br>
						<p style="text-align: center; font-size: 15px;"><i>Hòn Móng Tay (ảnh: Hà Linh) </i></p>
						<p>Hòn Móng Tay là một trong những hòn đảo có vẻ đẹp lãng mạn và thơ mộng nhất Phú Quốc. Với các bờ biển trong xanh như ngọc, bãi cát trắng tinh và những hàng dừa tỏa bóng mát thu hút rất nhiều du khách tới tham quan, nghỉ dưỡng. Đặc biệt, tại đây còn có rạn san hô tuyệt đẹp đang chờ đón bạn tới chiêm ngưỡng.</p>
						<p>Bạn có thể thuê tàu cao tốc đi từ cảng An Thới ra hòn Móng Tay chỉ mất khoảng 30 phút. Từ ngoài bờ nhìn vào cảnh vật thiên nhiên vô cùng ấn tượng, hàng dừa xanh vươn cao thẳng đứng dọc bờ biển, dải cát trắng chạy dài trong nắng.</p>
						<p>Từ khi hòn Móng Tay được biết thì nó đã trở thành một trong điểm du lịch hút khách hơn cả một số đảo ở Phú Quốc. Vẻ đẹp ban đầu của nơi đây vẫn được giữ nguyên, chưa chịu nhiều tác động từ bàn tay con người.
						<br>
						Nét đẹp tự nhiên chính là điểm riêng biệt khiến du khách thích thú. Từ xa hòn đảo xanh mướt như ngọc nổi bật trên nền trời khoáng đạt không một gợn mây.</p>
						<h3>Làng chài Hàm Ninh</h3>
						<p>Làng chài Hàm Ninh là một địa điểm du lịch nổi tiếng thu hút được nhiều du khách trong và ngoài nước yêu thích khi tới Phú Quốc. Ngôi làng hầu như vẫn còn giữ nguyên vẻ hoang sơ và bình dị, giúp du khách có được những bức ảnh tuyệt đẹp. Không những thế nơi đây còn có rất nhiều món ăn đang đợi chờ bạn tới thưởng thức.</p>
						<img src="langchai.jpeg"> <br>
						<p style="text-align: center; font-size: 15px;"><i>Làng chài Ham Ninh </i></p>
						<p>Làng chài Hàm Ninh ở Phú Quốc tọa lạc dưới chân núi Hàm Ninh, thuộc xã Hàm Ninh, huyện Phú Quốc, tỉnh Kiên Giang. Bên những mái nhà lô xô, bình dị, phảng phất sắc màu bàng bạc của sóng nước biển khơi cùng những rặng dừa vi vút trong gió, tấu lên bản nhạc giao hưởng đất trời biển đảo Phú Quốc.</p>
						<h3>Bãi Sao</h3>
						<img src="baisao1.jpeg"> <br>
						<p style="text-align: center; font-size: 15px;"><i>Bãi Sao (ảnh: Ryan Hieu Tran) </i></p>
						<p>Bãi Sao là địa điểm được rất nhiều cặp đôi lựa chọn khi tới nghỉ dưỡng hay hưởng tuần trăng mật tại Phú Quốc. Nằm cách thị trấn Dương Đông chỉ 30km, chỉ chưa đầy một tiếng đồng hồ là các bạn có thể tới đây rồi. Với những triền cát màu kem, mịn như nhung sẽ giúp các cặp đôi lưu giữ được khoảnh khắc tuyệt vời nhất trong cuộc đời.</p>
						<p>Bãi Sao vào độ đẹp nhất là từ tháng 6 đến tháng 10. Bạn sẽ có một kì nghỉ tuyệt vời nếu đến đây vào thời điểm này đó. Trong khoảng thời gian này bãi khuất gió tây nam nên lặng sóng, nước rất trong và xanh.</p>
						<h3>Bãi Dài</h3>
						<p>Đắm mình cùng biển và cát trắng của bãi biển được BBC bình chọn là 1 trong 10 bãi biển hoang sơ và đẹp nhất thế giới. Bãi Dài Phú Quốc có bờ biển dài 1500m, dọc theo bãi biển với cát biển là hàng dương xanh cao to, mọc theo hàng thẳng tắp.</p>
						<img src="baidai.jpeg"> <br>
						<p style="text-align: center; font-size: 15px;"><i>Bãi Dài (ảnh: Linh Chi) </i></p>
						<p>Xem thêm bài viết: <a href="#" style="color: #6fa9e5; font-weight:400">12 Khách sạn lý tưởng ở Phú Quốc không nên bỏ qua</a></p>
						<form id="comment">
							<input type="text" name="comment" placeholder="Bạn cảm thấy bài viết thế nào?" style="width: 600px; height: 70px; font-size: 20px;">
							<button type="Submit" style="width:50px; height: 50px; border: 0px; border-radius: 5px; color:white; background-color: #6fa9e5;">Gửi</button>
						</form> <br>
						<h2>0 Bình luận</h2> <br>
						<h2>Bạn có thể quan tâm</h2>
						<ul>
							<li>
								<a href="#" style="color: #6fa9e5; font-weight:400; font-size: 20px;">Review Vinpearl Phú Quốc</a>
							</li>
							<li>
								<a href="#" style="color: #6fa9e5; font-weight:400; font-size:20px;">Các món ăn nhất định phải thử khi đến Phú Quốc</a>
							</li>
						</ul>
				</div>
				
			</div>
			<div class="col-md-4">
				<div class="main2">
			<h4>Bài viết xem nhiều</h4>
				</div> 
				<div class="link2">
					<a href="#" style=" font-weight: 500;">Tổ hợp các quán cà phê phong cách Hàn Quốc tại Hà Nội</a>
					<div class="link22">
						<a href="#">Hà Nội</a>
						<span class="author"><a href="#">Luu Thi Nhu Quynh</a></span>
						<span style="color: #ededee;">-</span>
						<span class="time"><time class="entry-date updated td-module-date" >Tháng Tám 05, 2021</time></span>
					</div>
				</div>
				<div class="link2">
					<a href="#" style="font-weight: 500;">TOP 10+ món ăn nhất định phải thử khi đến Sapa</a>
					<div class="link22">
						<a href="#">Ẩm thực</a>
						<span class="author"><a href="#">Luu Thi Nhu Quynh</a></span>
						<span style="color: #ededee;">-</span>
						<span class="time"><time class="entry-date updated td-module-date" >Tháng Sáu 26, 2021</time></span>
					</div>
				</div>
				<div class="link2">
					<a href="#" style="font-weight: 500;">Những địa điểm săn mây lý tưởng tại Đà Lạt</a>	
					<div class="link22">
						<a href="#">Đà Lạt</a>
						<span class="author"><a href="#">Luu Thi Nhu Quynh</a></span>
						<span style="color: #ededee;">-</span>
						<span class="time"><time class="entry-date updated td-module-date" >Tháng Tư 25, 2021</time></span>
					</div>
				</div>
				<div class="link2">
					<a href="#" style="font-weight: 500;">TOP 5+ địa điểm du lịch mùa đông tuyệt vời ở miền Bắc</a>	
					<div class="link22">
						<a href="#">Trải nghiệm</a>
						<span class="author"><a href="#">Luu Thi Nhu Quynh</a></span>
						<span style="color: #ededee;">-</span>
						<span class="time"><time class="entry-date updated td-module-date" >Tháng Một 15, 2021</time></span>
					</div>
				</div>
				<div class="link2">
					<a href="#" style="font-weight: 500;">Ghé thăm những địa điểm sống áo bậc nhất Sài Gòn</a>	
					<div class="link22">
						<a href="#">Tp.HCM</a>
						<span class="author"><a href="#">Luu Thi Nhu Quynh</a></span>
						<span style="color: #ededee;">-</span>
						<span class="time"><time class="entry-date updated td-module-date">Tháng Hai 16, 2021</time></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

</main>
<footer>
	<div class ="Footer" >
		<div class="container">
			<div class="row">
				<div id="aboutus" class="col-md-2">
					<a href="">
						<ul>
							<li> <b>VỀ KIUMIN</b> </br> </br>
								Giới thiệu</br>
								Tuyển dụng</br>
								Chính sách bảo mật </br>
								Chính sách khiếu nại </br>
								Điều khoản sử dụng </br>
							</li>
						</ul>
					</a>
				</div>
				<div id="hotro" class="col-md-4">
					<a href="">
						<ul>
							<li>
								<b>HỖ TRỢ KHÁCH HÀNG</b> </br> </br>
								Các câu hỏi thường gặp </br>
								Gửi yêu cầu hỗ trợ </br>
								Hướng dẫn đặt phòng </br>
								Chính sách hoàn tiền</br>
								Hướng dẫn trả góp </br>
								Hỗ trợ khách hàng: hotro@kiumin.com </br>
								Hỗ trợ bảo mật: security@kiumin.com
							</li>
						</ul>
					</a>
					
				</div>
				<div id="thanhtoan" class="col-md-3">
						<b>PHƯƠNG THỨC THANH TOÁN</b> </br> </br>
						<img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/visa.svg" width="54" alt="">
						<img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/mastercard.svg" width="54" alt="">
						<img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/jcb.svg" width="54" alt=""> </br>
						<img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/cash.svg" width="54" alt="">
						<img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/internet-banking.svg" width="54" alt="">
						<img class="icon" src="https://frontend.tikicdn.com/_desktop-next/static/img/footer/installment.svg" width="54" alt="">
				</div>
				<div id="socialmedia" class="col-md-3">
					<b>KẾT NỐI VỚI CHÚNG TÔI</b></br> </br>
					<div id="icon">
					<a href="https://www.facebook.com/nhuquynhluu1609/" target="_blank"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.youtube.com/channel/UCA_23dkEYToAc37hjSsCnXA" target="_blank"><i class="fab fa-youtube"></i></a>
					<a href="https://www.instagram.com/1.68mm__/?hl=vi"target="_blank"><i class="fab fa-instagram"></i></a></div> </br> </br>
					<div id="">
						
					</div>

				</div>
			</div>
			<div class="row">
				<div id="hotline" class="col-md-6"><b>Hotline chăm sóc khách hàng: 0123456789</b>
								</div>
					<div id="info">(1000đ/phút , 8-21h kể cả T7, CN)</div>
			</div>
		</div>
	</div>
	<div class="Footer2">
		<div class="container">
			<div class="row">
				<div id="address" class="col-md-6">
					<b>Địa chỉ văn phòng:</b>
					<p>42 Dương Văn Bé, phường Vĩnh Tuy, quận Hai Bà Trưng, Hà Nội</p>
				</div>
			</div>
			<div class="row">
				<div id="copyright" class="col-md-12">
					<i class="far fa-copyright"> 2021 KiuMin</i>
				</div>
			 </div>
		</div>
	</div>
</footer>
</body>
</html>