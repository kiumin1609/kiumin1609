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
	<title>Tinh hoa ẩm thực Việt Nam</title>
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
		<img src="bm.jpeg">
		<h1>KHÁM PHÁ TINH HOA ẨM THỰC VIỆT </h1>
	</div>
	<div class="contentpq">
	<div class="container">
		<div class="row">
			<div class="col-md-8"  >
				<p>Với nhiều món ăn ngon và lạ, ẩm thực Việt Nam chính là một phần hồn dân tộc, góp phần tạo nên sức quyến rũ cho Du lịch Việt Nam. Người dân Việt Nam ở mỗi vùng miền lại có khẩu vị khác nhau. Người miền Bắc ăn nhạt, chủ yếu sử dụng nước mắm, mắm tôm pha loãng, nhiều món rau và các loại thủy sản nước ngọt như tôm, cua, cá, trai, hến... Ẩm thực Hà Nội được coi là đại diện tinh hoa của ẩm thực Bắc Bộ. Người miền Trung ăn cay và mặn, nổi tiếng với mắm tôm chua và các loại mắm ruốc. Đặc biệt, người Huế rất cầu kỳ trong chế biến và trình bày món ăn. Người miền Nam thường thêm đường hoặc nước cốt dừa vào món ăn, họ sử dụng nhiều loại mắm khô (mắm cá sặc, mắm bò hóc, mắm ba khía…). Dưới đây là một số món ăn nổi tiếng của ẩm thực Việt.</p>
				<div class="time">
					<h2>Phở</h2>
						<img src="pho.jpeg"> <br>
					<p style="text-align: center; font-size: 15px;"><i>Phở bò Nam Định</i></p>
					<p>Phở là món ăn Việt Nam đã nổi tiếng trên thế giới, là món ăn đầu tiên được du khách lựa chọn khi đặt chân đến đất Việt. Trong món phở có vị thanh tao của rau thơm, vị ngọt bùi của nước dùng xương hầm, vị thơm nồng của gừng nướng, vị cay cay của ớt và dĩ nhiên không thể thiếu những sợi bánh phở vừa mềm mượt vừa dai. Bạn có thể ăn phở gà hoặc phở bò, vào bất cứ lúc nào trong ngày, mùa nào trong năm và ở bất cứ nơi đâu bạn muốn. Đặc biệt, nói đến phở ngon là người ta nghĩ ngay đến Hà Nội.</p>
				
					<p> Để thưởng thức món phở ở Hà Nội, bạn có thể đến phở Thìn, chuỗi phở 24, phở Gia Truyền (49 Bát Đàn), phở Lý Quốc Sư, phở gà Nam Ngư…</p>

				
					<h2>Bún chả</h2>
					<p>Bún chả được xem là “bửu vật” lâu đời của đất Hà thành. Có hai loại chả là chả băm và chả miếng. Sau khi tẩm ướp các gia vị, thịt lợn được nướng trên bếp than hoa, đến khi chín, thịt vàng rộm và tỏa mùi hương thơm phức, thả vào bát nước mắm pha loãng có đủ vị chua, cay, mặn, ngọt, điểm thêm những lát cà rốt, su hào hoặc đu đủ xanh thái mỏng đã được bóp muối và ngâm dấm. Chả  nóng ăn với bún rối, kèm theo các rau xà lách, rau thơm, húng, kinh giới, tía tô… ngon không thể nào quên.</p>
					<p> Hà Nội có rất nhiều quán bún chả ngon, tùy theo khả năng khám phá của bạn. Bạn có thể thưởng thức món ăn này ở số 1 Hàng Mành, ngõ Trạm, ngõ Hàng Chiếu hoặc bún chả que tre ở đầu ngõ 81 đường Lạc Long Quân…   </p>
					
					<h2>Bánh chưng</h2>
					<p>Bánh chưng không thể thiếu vắng trong dịp Tết Nguyên đán của người Việt. Đó là những chiếc bánh vuông vắn, đẹp mắt với màu xanh tươi của lá dong, gói gọn bên trong những hạt nếp dẻo mềm, vị đậu xanh ngon bùi, vài miếng thịt lợn béo ngậy. Bánh chưng là đồ lễ dâng cúng tổ tiên, ông bà, vì thế người Việt luôn chọn những nguyên liệu ngon nhất, tươi nhất để làm bánh; khi gói chăm chút rất cẩn thận sao cho chiếc bánh trông đẹp mắt; gói xong đem luộc trong thời gian khoảng 12 giờ đồng hồ để bánh chín mềm. Khi ăn, người ta gỡ từng lớp lá, lộ dần ra chiếc bánh nhuộm màu xanh tươi của lá dong.</p> 
					
					<h2>Bánh cốm hàng Than</h2>
					<p>Bánh cốm là sản vật nổi tiếng chỉ có ở Hà Nội, không thể thiếu trong các dịp cưới hỏi, giỗ chạp và là món quà được ưa chuộng của du khách. Bánh cốm ngon đảm bảo tinh khiết, không có chất bảo quản, hạn sử dụng trong vòng 3 ngày. Món ăn này có vị dẻo thơm của cốm và vị ngọt bùi của đỗ xanh, càng ăn càng đậm đà.</p>
						<h2>Chả cá Lã vọng</h2>
						<img src="cclv.jpeg"> <br>
						<p style="text-align: center; font-size: 15px;"><i>Chả cá lã vọng</i></p>
					<p>Chả cá Lã Vọng là một món ăn tao nhã, đã được tác giả Patricia Schultz - người từng đi vòng quanh thế giới đưa vào cuốn "1000 nơi nên biết trước khi chết" (1000 places to see before you die). Vì thế, du khách đến Hà Nội không thể bỏ qua món ăn này. Chả cá Lã Vọng được làm từ cá lăng, loại cá không có xương dăm và rất ngọt thịt. Thưởng thức chả cá là một nghệ thuật. Giữa bàn là một lò đất nhỏ hồng rực than, trên bếp là cái chảo để người ngồi ăn quanh bàn có thể nhìn thấy màu vàng dịu và trong trẻo của dầu sủi tăm, đặc biệt là miếng chả cá thơm phức. Khi ăn, bạn gắp thì là và hành hoa cắt dài độ một ngón tay thả vào chảo. Lúc này miếng chả vừa chín tới, cong lên giữa những cọng rau xanh bóng mỡ... Món ăn này thường được thưởng thức kèm bún trắng, một chút lạc rang vàng, hành ta thái chỉ ngâm dấm trắng dịu, ít mùi, ít húng Láng, nước chấm là mắm tôm, chanh, ớt...</p>
						
						<p>Bạn có thể thưởng thức món ăn này ở một số nơi tại Hà Nội, nhưng nổi tiếng nhất là nhà số 14 phố Chả Cá của dòng họ Đoàn, bởi đây là nơi ra đời món chả cá Lã Vọng.</p>
						<h2>Chè Huế</h2>
						<p>Huế nổi tiếng với các món chè. Từ những nguyên liệu thiên nhiên quen thuộc như đậu xanh, đậu đỏ, khoai môn… chè Huế là sự kết hợp mới lạ và độc đáo, hội đủ vị ngọt của đường, vị béo của nước cốt dừa, vị bùi của những hạt đậu và mỗi loại chè mang một mùi thơm rất đặc trưng. Du khách có thể tùy ý lựa chọn cho mình món chè khoái khẩu, từ những loại chè sang trọng có nguồn gốc cung đình như chè hạt sen tươi, chè hạt sen bọc long nhãn, chè đậu ngự, đến những loại chè bình dân như chè khoai môn, chè đậu xanh, chè bắp…</p>
						<p>Chè có mặt khắp mọi nơi trên đất cố đô, nhưng ngon nhất vẫn là quán chè Hẻm ở đường Hùng Vương, quán chè Sao ở đường Phan Bội Châu... Ngoài chè, xứ Huế còn nổi tiếng với rất nhiều loại bánh thơm ngon như bánh bèo, bánh khoái, bánh bột lọc, bánh nậm…</p>
						<h2>Cao lầu Hội An</h2>
						<img src="clha.jpeg"> <br>
						<p style="text-align: center; font-size: 15px;"><i>Cao lầu Hội An</i></p>
						<p>Cao lầu Hội An là một món ăn bổ dưỡng, tích hợp văn hóa của nhiều dân tộc. Bát cao lầu trông rất bắt mắt bởi màu xanh của rau, màu đỏ hồng của thịt xá xíu, màu nâu của lạc và màu vàng của sợi cao lầu. Khi ăn người ta rưới vào bát cao lầu vài thìa nước sốt thịt xá xíu, tạo cảm giác rất ngon miệng. Cao lầu thường ăn kèm với bánh đa vừng nướng giòn tan, vừa bùi vừa ngậy.</p>
						<p>Tại Hội An, quán chị Liên nằm trên đường Thái Phiên (chỉ bán vào buổi chiều), hoặc quán Trung Bắc nằm trên đường đi ra chùa Cầu... là những quán cao lầu khá ngon.</p>
						<p>Xem thêm bài viết: <a href="#" style="color: #6fa9e5; font-weight:400">Ẩm thực đường phố Hà Nội</a></p>
						<form id="comment">
							<input type="text" name="comment" placeholder="Bạn cảm thấy bài viết thế nào?" style="width: 600px; height: 70px; font-size: 20px;">
							<button type="Submit" style="width:50px; height: 50px; border: 0px; border-radius: 5px; color:white; background-color: #6fa9e5;">Gửi</button>
						</form> <br>
						<h2>0 Bình luận</h2> <br>
						<h2>Bạn có thể quan tâm</h2>
						<ul>
							<li>
								<a href="#" style="color: #6fa9e5; font-weight:400; font-size: 20px;">3 địa điểm lịch sử tại Bình Định</a>
							</li>
							<li>
								<a href="#" style="color: #6fa9e5; font-weight:400; font-size:20px;">Review du lịch Tràng An - Bái Đính</a>
							</li>
						</ul>
				</div>
				
			</div>
			<div class="col-md-4">
				<div class="main2">
			<h4>Bài viết xem nhiều</h4>
				</div> 
				<div class="link2">
					<a href="#" style=" font-weight: 500;">Các địa điểm tham quan, du lịch tại Ninh Bình</a>
					<div class="link22">
						<a href="#">Ninh Bình</a>
						<span class="author"><a href="#">Luu Thi Nhu Quynh</a></span>
						<span style="color: #ededee;">-</span>
						<span class="time"><time class="entry-date updated td-module-date">Tháng Tám 05, 2021</time></span>
					</div>
				</div>

				<div class="link2">
					<a href="#" style="font-weight: 500;">TOP 10+ món ăn nhất định phải thử khi đến Huế</a>
					<div class="link22">
						<a href="#">Ẩm thực</a>
						<span class="author"><a href="#">Luu Thi Nhu Quynh</a></span>
						<span style="color: #ededee;">-</span>
						<span class="time"><time class="entry-date updated td-module-date">Tháng Sáu 26, 2021</time></span>
					</div>
				</div>
				<div class="link2">
					<a href="#" style="font-weight: 500;">Những địa điểm lịch sử tại Bình Định</a>	
					<div class="link22">
						<a href="#">Bình Định</a>
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
					<a href="#" style="font-weight: 500;">Ghé thăm chùa Tam Chúc-ngôi chùa lớn nhất Đông Nam Á</a>	
					<div class="link22">
						<a href="#">Hà Nam</a>
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