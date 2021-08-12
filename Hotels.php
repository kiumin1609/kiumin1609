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
          echo "window.location.href='/Project1/Hotels.php'";
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
	<title>Khách sạn tại Đà Lạt</title>
	<link rel="stylesheet" type="text/css" href="assets/css/Hotels.css">
	<link rel="icon" type="image/ic" href="kiumin.png">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
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
	<div class="imgcover ">
		<div class="searchhotel">
			<h1>Tìm khách sạn ở Đà Lạt</h1> <br>
			<h2>Hơn 200 khách sạn, homestay hiện đang còn phòng trống</h2>
		</div>
		<img src="coverdalat.png">
	</div>
</main>
</body>
</html>