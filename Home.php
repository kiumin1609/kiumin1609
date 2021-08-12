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
          echo "window.location.href='/Project1/Home.php'";
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
	<title> 
	Đặt khách sạn,Homestay, Tour và Trải nghiêm du lịch Việt Nam </title>
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
						<a href="trainghiem.php">
							Trải nghiệm
						</a>
					</div>
					<div class="Help">
						<a href="">Hỗ trợ</a>
					</div>
					<div class="Account">
						<?php if(isset($_SESSION['username'])){ ?>
							
							<button type="button" class="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
								<a href="logout.php" style="margin: 0px">
									<?php echo $_SESSION['username']['username']; ?>
								</a>
						</button>
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
	<div style=" background-color: black; color: white; text-align: center; font-size: 18px; font-weight: 150;"><span>Chúng tôi biết kế hoạch du lịch của quý khách có thể chịu ảnh hưởng của COVID-19. Tìm hiểu thêm tình hình dịch bệnh để có một chuyến đi an toàn nhé. <a href="https://ncov.moh.gov.vn/" target="_blank" style="color: #7CBCFF;">Tìm hiểu thêm</a> </span></div>
	<div class="Cover ">
		<div class="goto">
			<div class="icongoto"><i class="fas fa-search-location"></i>
			<input type="text" name="text-box" placeholder="Bạn muốn đi đâu?" >
			</div>
		</div>
		
				<img src="cover.png" style="margin-top: 97px;">
		
	</div>
			
	
	</div> 
	<div class="Content">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="Place">
						<p>Khám phá những điểm đến nổi bật</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="no1">
					<a href="Hotels.php">
						<img src="dalas.jpeg" class="img-thumbnail">
						Đà Lạt
					</a>
				</div>
				</div>
				<div class="col-md-3">
				<div class="no2">
					<a href="">
						<img src="phuquoc1.jpeg" class="img-thumbnail">
						Phú Quốc
					</a>
				</div>
				</div>
				<div id="no3" class="col-md-3">
					<a href="">
					<img src="halong2.jpeg" class="img-thumbnail">
					Vịnh Hạ Long</a>
				 </div>
				 <div id="no4" class="col-md-3">
				 <a href="">
				 	<img src="hcm.jpeg" class="img-thumbnail"> Tp.Hồ Chí Minh
				 </a> 
				</div>
			</div>
			<div class="row">
				<div id="no5" class="col-md-3">
					<a href="">
						<img src="sapa.jpeg" class="img-thumbnail"> Thị trấn Sapa
					</a>
				</div>
				<div id="no6" class="col-md-3">
					<a href="">
						<img src="hanoi1.jpeg" class="img-thumbnail" > Hà Nội
					</a>
				</div>
				<div id="no7" class="col-md-3" >
					<a href="">
						<img src="danang.jpeg" class="img-thumbnail">Đà Nẵng
					</a>
				</div>
				<div id="no8" class="col-md-3">
					<a href="">
						<img src="nhatrang.jpeg"  class="img-thumbnail"> Nha Trang
					</a>
				</div>
			</div>
		</div> 
	</div>
	<div class="Content2">
		<div class="container">
			<div class="row">
				<div class="col-md-6"> 
					<div class="Place2"> 
						<p>Ở bất cứ đâu</p>
					</div>
				</div>
			</div>
			<div class="row">
			<div id="canho" class="col-md-3">
				<a href="">
					<img src="canho.jpeg" class="">
					<div id="canho1"> Căn hộ chung cư</div>	
				</a>
			</div>
			<div id="villa" class="col-md-3">
				<a href="">
					<img src="villa.jpeg">
					<div id="villa1">Villa</div>
				</a>
			</div>
			<div id="pet" class="col-md-3">
				<a href="">
					<img src="pet.jpeg">
					<div id="pet1">Cho phép thú cưng</div>
				</a>
			</div>
			<div id="camping" class="col-md-3">
				<a href="">
					<img src="camping.jpeg">
					<div id="camping1">Cắm trại dã ngoại</div>
				</a>
			</div>
		</div>
		</div>
	</div>
	<div class="Content3">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="Place3">
					<p>Kinh nghiệm du lịch</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div id="share1" class="col-md-4">
					<a href="reviewpq.php">
						<img src="phuquocreview.png">
						<div id="share11">
							<h1>Review Phú Quốc 3N2Đ</h1>
							<p>Chia sẻ kinh nghiệm du lịch Phú Quốc.</p>
						</div>
					</a>
				</div>	
				<div id="share2" class="col-md-4">
					<a href="dulichvanhoa.php">
						<img src="dulichvanhoa.jpeg">
						<div id="share21">
							<h1>Du lịch văn hoá</h1>
							<p>Trải nghiệm văn hoá tại các địa phương của Việt Nam.</p>
						</div>
					</a>
				</div>
				<div id="share3" class="col-md-4">
					<a href="dulichamthuc.php">
						<img src="amthuc.jpeg" class="">
						<div id="share31">
							<h1>Ẩm thực Việt</h1>
							<p>Trải nghiệm ẩm thực 3 miền.</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
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
</body>
</html>