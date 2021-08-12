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
	<title>Du lịch văn hóa Việt Nam</title>
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
		<img src="dulvh.jpeg">
		<h1>DU LỊCH VĂN HÓA LÀ GÌ? NHỮNG ĐIỀU CẦN BIẾT KHI DU LỊCH VĂN HÓA </h1>
	</div>
	<div class="contentpq">
	<div class="container">
		<div class="row">
			<div class="col-md-8"  >
				<p>Hiện nay, có rất nhiều các loại hình du lịch đang dần xuất hiện. Bên cạnh những loại hình như du lịch nghỉ dưỡng, du lịch sinh thái, du lịch mạo hiểm,… thì du lịch văn hóa là một hình thức đã có từ lâu và ngày càng trở nên phổ biến trên khắp thế giới. Vậy du lịch văn hóa là gì? Chúng ta hãy cùng tìm hiểu thông tin về du lịch văn hóa nhé!</p>
				<div class="time">
					<h2>Du lịch văn hóa là gì?</h2>
					<p>Du lịch văn hóa (Cultural tourism) là là tập hợp các du lịch liên quan đến sự tham gia của người du lịch với nền văn hóa của một vùng đất khác. Hay nói cách khác, du lịch văn hóa là sự di chuyển của con người đến các điểm du lịch văn hóa ở các quốc gia hay vùng miền không phải nơi họ sống, với mục đích khám phá, mở rộng kiến thức, kinh nghiệm về nhu cầu văn hóa của họ.</p> 
						<img src="btls.jpeg"> <br>
					<p style="text-align: center; font-size: 15px;"><i>Bảo tàng Lịch sử Quân sự</i></p>
					<p>Du lịch văn hóa là một loại hình du lịch nằm trong ngành du lịch, và thực chất là một ngành kinh doanh có sử dụng yếu tố văn hóa. Các yếu tố văn hóa thu hút khách du lịch đó là các phong tục tập quán, tín ngưỡng, các lễ hội truyền thống, di tích lịch sử, những kiến trúc, nghệ thuật và các sản phẩm văn hóa khác,…</p>
				
					<p>Nguồn gốc của du lịch văn hóa có lịch sử từ lâu đời và được cho rằng đây là hình thức ban đầu của du lịch. Theo nhiều nghiên cứu, du lịch văn hóa đang ngày càng phát triển và trở thành xu hướng du lịch của nhiều quốc gia.</p>
					<h2>Tài nguyên du lịch văn hóa</h2>
					<p>Tài nguyên du lịch (Tourism resources) là cơ sở để phát triển của ngành du lịch, bao gồm tất cả những nhân tố được sử dụng để thu hút, kích thích động cơ du lịch của con người với mục đích sinh ra lợi ích kinh tế, xã hội. Tài nguyên du lịch là những yếu tố tự nhiên, văn hóa và xã hội.</p>

					<p>Tài nguyên du lịch văn hóa bao gồm những di tích lịch sử – văn hóa, công trình kiến trúc nghệ thuật, di tích cách mạng, các giá trị văn hóa dân gian, lễ hội truyền thống, các công trình lao động sáng tạo của con người được sử dụng cho mục đích du lịch.</p>
					<img src="cctn.jpeg"> <br>
					<p style="text-align: center; font-size: 15px;"><i>Không gian văn hóa cồng chiêng Tây Nguyên</i></p>
					<h2>Du lịch văn hóa tâm linh</h2>
					<p>Du lịch tâm linh (Spiritual tourism) bản chất là một loại hình du lịch văn hóa nên còn được gọi là du lịch văn hóa tâm linh.</p>
					<p> Du lịch văn hóa tâm linh là gì? Loại hình này khai thác yếu tố văn hóa tâm linh làm cơ sở và mục tiêu đáp ứng nhu cầu tâm linh của con người. Nói cách khác, đó là những hoạt động du lịch về các giá trị văn hóa vật thể và phi vật thể gắn với lịch sử, giá trị về tín ngưỡng, tôn giáo và những giá trị tinh thần đặc biệt khác.</p>
					<p>Du lịch văn hóa tâm linh được thể hiện qua việc con người di chuyển tới các địa điểm, cơ sở tôn giáo, tín ngưỡng để tham quan; cúng bái, cầu nguyện; hoặc tìm hiểu về các triết lý, giáo pháp.</p>
					<h2>Thực trạng du lịch văn hóa ở Việt Nam</h2>
					<p>Du lịch văn hóa là xu hướng của nhiều quốc gia và rất phù hợp với bối cảnh phát triển của Việt Nam. Việt Nam cũng được đánh giá là quốc gia vô cùng tiềm năng để phát triển du lịch văn hóa. Một số loại hình du lịch văn hóa đã và đang phát triển ở Việt Nam như: du lịch lễ hội, du lịch bảo tàng, du lịch di sản, du lịch ẩm thực,…</p> 
					
					<p>Với bề dày lịch sử 4000 năm dựng nước và giữ nước, nền văn hóa Việt Nam mang đậm bản sắc dân tộc đã phát triển rất nhiều giá trị to lớn. Việt Nam có 54 dân tộc với những phong tục tập quán, thói quen sinh hoạt, tín ngưỡng khác nhau, đây chính là nguồn tài nguyên du lịch văn hóa phong phú. Không những thế, Việt Nam còn có hơn 44.000 danh lam thắng cảnh và di tích lịch sử, trong đó hơn 3000 địa danh là di sản cấp quốc gia, hơn 5000 địa danh di sản cấp tỉnh và 7 di sản văn hóa được UNESCO công nhận là di sản văn hóa thế giới.</p>
					<img src="tphcm.jpeg"> <br>
					<p style="text-align: center; font-size: 15px;"><i>Nhà thờ Đức Bà – Tp. Hồ Chí Minh</i></p>
					<p>
						Việt Nam có 117 bảo tàng là nơi lưu trữ, trưng bày và tái hiện chân thực về lịch sử phát triển của đất nước. Nghệ thuật dân gian mang đặc trưng bản sắc dân tộc Việt Nam luôn hấp dẫn khách du lịch từ khắp mọi miền như những câu quan họ dân ca, làn điệu chèo, cải lương, ca trù, các công cụ âm nhạc truyền thống (đàn bầu, đàn cầm, sáo,…),… trong đó đặc biệt nổi bật là nghệ thuật múa rối nước.
					</p>
					<p>Trong đời sống xã hội, Việt Nam có tới 8.000 lễ hội trong đó 90% là lễ hội dân gian và có rất nhiều lễ hội cấp quốc gia. Có thể kể đến một số lễ hội phổ biến như Lễ hội văn hóa Tây Bắc kết hợp với sự kiện chính trị 50 năm chiến thắng Điện Biên Phủ (Du lịch Điện Biên Phủ), Lễ hội văn hóa dân gian vùng Đồng bằng Nam bộ (Lễ hội Đất Phương Nam), Lễ hội dân gian kết hợp tham quan những di sản văn hóa được UNESCO công nhận (Con đường Di sản miền Trung), Festival Huế,…</p>
					<img src="mrn.jpeg"> <br>
					<p style="text-align: center; font-size: 15px;"><i>Nghệ thuật múa rối nước Việt Nam</i></p>
					Về tâm linh, từ lịch sử xa xưa Việt Nam có rất nhiều những vị anh hùng dân tộc có công có dân với nước gắn với tín ngưỡng thờ cúng. Và con người Việt theo khá nhiều tôn giáo khác nhau như Thiên chúa giáo, đạo Tin Lành,… và nhiều nhất là Phật giáo chiếm 90%.</p>
					<p>Ngành du lịch của Việt Nam trong những năm qua đã đạt được rất nhiều thành công nhất là khi bắt đầu áp dụng những chính sách mở cửa du lịch. Đặc biệt là về du lịch văn hóa, Việt Nam đã không ngừng phát triển tạo ra thương hiệu du lịch cho quốc gia với những sản phẩm du lịch văn hóa khác biệt.</p>
					
					<h2>Địa danh du lịch văn hóa nổi bật</h2>
					<p>Du lịch văn hóa Việt rất phát triển do Việt Nam có nguồn tài nguyên du lịch văn hóa đa dạng, dồi dào. Hơn nữa, nền văn hóa Việt Nam không chỉ đậm chất truyền thống mà còn mang nét đẹp hiện đại giao thoa, kết hợp của nhiều nền văn hóa khác nhau. Mình sẽ gợi ý một số địa danh du lịch văn hóa Việt Nam nổi tiếng để bạn khám phá nhé.</p>
					<h2>Du lịch văn hóa tại Hà Nội</h2>
					<p>Trong lịch sử giữ nước, Hà Nội chiếm vị trí quan trọng nên nơi đây không chỉ mang dấu ấn bản sắc dân tộc mà còn ảnh hưởng rất nhiều từ nền văn hóa khác nhau. Đến với Hà Nội, bạn sẽ được chiêm ngưỡng những công trình kiến trúc ấn tượng và nghệ thuật ẩm thực độc đáo. Tham quan các địa danh lịch sử, các viện bảo tàng để tìm hiểu về quá khứ lịch sử huy hoàng của dân tộc. Khám phá khu phố cổ Hà Nội để trải nghiệm cuộc sống từ thời xa xưa, tìm đến các đền thờ, chùa chiền với cấu trúc nghệ thuật đặc sắc. Thưởng thức chương trình nghệ thuật múa rối nước để trải nghiệm hình thức giải trí truyền thống giúp tinh thần thoải mái.</p>
						<img src="lb.jpeg"> <br>
						<p style="text-align: center; font-size: 15px;"><i>Lăng Chủ tịch Hồ Chí Minh</i></p>
						<p>Một số địa điểm du lịch văn hóa tại Hà Nội như: Lăng Chủ tịch Hồ Chí Minh, Chùa Trấn Quốc, Chùa Một Cột, Văn miếu Quốc Tử Giám, Bảo tàng Hồ Chí Minh, Bảo tàng Lịch sử Việt Nam, Làng gốm Bát Tràng,… và rất nhiều các địa danh, các khu trung tâm thương mại khác.</p>
						<h2>Du lịch văn hóa tại Thành phố Hồ Chí Minh</h2>
						<p>Tiếp theo, chúng ta hãy cùng đến với Tp Hồ Chí Minh – trung tâm kinh tế của Việt Nam nhưng mang những giá trị văn hóa đặc sắc, kết hợp tuyệt vời giữa hai nền văn hóa Á – Âu. Bên cạnh những di tích lịch sử thì bạn sẽ được chiêm ngưỡng những công trình kiến trúc cổ xưa và hiện đại, trải nghiệm hoạt động tại những trung tâm mua sắm, trung tâm giải trí lớn và các quán bar hiện đại.</p>
						<img src="cc.jpeg"> <br>
						<p style="text-align: center; font-size: 15px;"><i>Địa đạo Củ Chi – Tp. Hồ Chí Minh </i></p>
						<p>Những địa danh du lịch văn hóa nổi tiếng tại Tp Hồ Chí Minh như: Địa đạo Củ Chi, Dinh Độc Lập, Bảo tàng chứng tích chiến tranh, Nhà thờ Đức Bà, Chợ Bến Thành,…</p>
						<h2>Du lịch văn hóa tại Huế</h2>
						<p>Nhắc đến du lịch văn hóa Việt Nam thì không thể bỏ qua thành phố Huế thân thương. Nơi đây là cố đô với các di tích văn hóa, cung điện, đền đài, lăng mộ,… thể hiện lịch sử phong kiến Việt Nam. Đến Huế, bạn sẽ được tìm hiểu về các cuộc chiến tranh trong quá khứ, khám phá các công trình kiến trúc nghệ thuật cổ đại và chiêm ngưỡng vẻ đẹp thơ mộng của cảnh quan thiên nhiên.</p>
						<img src="dlh.jpeg"> <br>
						<p style="text-align: center; font-size: 15px;"><i>Đại nội Huế mang nét đẹp lịch sử uy nghi, hoành tráng</i></p>
						<p>Một số điểm du lịch văn hóa ở Huế mà bạn nên đến như: Đại nội Huế, Lăng Tự Đức, Lăng Minh Mạng, Trường Quốc học Huế, Chùa Thiên Mụ, Sông Hương, Vườn Quốc gia Bạch Mã, Điện Hòn Chén, Thiền viện Trúc Lâm Bạch Mã, Đồi Thiên An,…</p>
						<p>Xem thêm bài viết: <a href="#" style="color: #6fa9e5; font-weight:400">Các địa điểm tâm linh gần Hà Nội</a></p>
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