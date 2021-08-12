<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Đăng ký</title>
    <style>
body {
	background-image: url("amanoi3.png"); 
	background-size: cover ;
	
} 

</style>

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
						<button type="button" class="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tài khoản</button>
						<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  							<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
   								 <div class="modal-content">
      								<div class="modal-header">
       									 <h5 class="modal-title" id="staticBackdropLabel">Đăng nhập/Đăng kí</h5>
        								<button type="button" class="btn-close" 	data-bs-dismiss="modal" aria-label="Close"></button>
      								</div>
      									<div class="modal-body">
      										<div id="emaildn">
        										Tên đăng nhập
        									</div>
        									<div id="box1">
        										<input type="text" name=" txtUsername">
											</div>
											<div id="password">Mật khẩu</div>
											<div id="box2">
        										<input type="password" name="txtPassword">
											</div>
											
											<a href="">Quên mật khẩu?
											</a>
											<div class="submit">
												<input type="Submit" name="Đăng nhập" value="Đăng nhập">

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
        										<a href="dangki.php">             <button type="button" class="btn btn-default">
        											<span>Chưa có tài khoản? Đăng ký ngay
        											</span>
        										</button>
        										</a>

        									</div>
      									</div>
   								 </div>
  							</div>
						</div>
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
	<h1 class="ta mt">Đăng kí </h1>
	<form action="xuly.php" method="POST">
		<div class="dangki">
			<label for="tendangnhap" class="ta"> <b class="out">Tên đăng nhập</b></label> <br>
				<input type="text" placeholder=" Tên đăng nhập" name="txtUsername" required class="formdk"> <br>
			<label for="Email" class="ta"> <b class="out">Email</b></label> <br>
				<input type="text" placeholder=" Email" name="txtEmail" required class="formdk"> <br>
			<label for="Password" class="ta "><b class="out">Mật khẩu</b></label><br>
			<input type="password" placeholder=" Mật khẩu" name="txtPassword" required class="formdk"> <br>
			 <label for="hovaten" class="ta"> <b class="out">Họ và tên</b></label> <br>
				<input type="text" placeholder="Họ và tên" name="txtFullname" required class="formdk"> <br>
				<label for="ngaysinh" class="ta"> <b class="out">Ngày sinh</b></label> <br>
				<input type="text" placeholder="Ngày sinh" name="txtBirthday" required class="formdk"> <br>
				<label for="gioitinh"><b class="out">Giới tính</b></label>
				<select name="txtSex">
                            <option value=""></option>
                            <option value="Nam">Nam</option>
                            <option value="Nu">Nữ</option>
                       </select> <br>
    		<label> 
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" class="out"> Ghi nhớ mật khẩu
    </label> <br>
    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" class="out"> Tôi đồng ý với các <a href="#" style="color:dodgerblue">Điều khoản sử dụng</a> và <a href="#" style="color:dodgerblue">Chính sách bảo mật </a>của Kiumin.
		</div>
        <div class="clearfix">
        	<button type="submit" class="signupbtn" value="Đăng kí" >Đăng ký</button>
        </div>
	</form>
</main>
</body>
</html>