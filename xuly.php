<?php
// Nếu không phải là sự kiện đăng ký thì không xử lý
if (!isset($_POST['txtUsername'])){
die('');
}

//Nhúng file kết nối với database
include('ketnoi.php');

//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');

//Lấy dữ liệu từ file dangky.php
$username = addslashes($_POST['txtUsername']);
$email = addslashes($_POST['txtEmail']);
$password= addslashes($_POST['txtPassword']);
$fullname = addslashes($_POST['txtFullname']);
$birthday = addslashes($_POST['txtBirthday']);
$sex = addslashes($_POST['txtSex']);

//Kiểm tra người dùng đã nhập liệu đầy đủ chưa
if (!$username || !$password || !$email || !$fullname || !$birthday || !$sex)
{
echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}

// Mã khóa mật khẩu
$password = md5($password);
//Kiểm tra tên đăng nhập này đã có người dùng chưa
$sql = "SELECT * FROM member WHERE username='$username'";
$query= mysqli_query($conf, $sql);

if (mysqli_num_rows($query) > 0){
echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}


//Kiểm tra email đã có người dùng chưa
$sql = "SELECT * FROM member WHERE email='$email'";
$query= mysqli_query($conf, $sql);
if (mysqli_num_rows($query) > 0)
{
echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
exit;
}


//Lưu thông tin thành viên vào bảng
$sql = "INSERT INTO member (
			username,
			email,
			password,
			fullname,
			birthday,
			sex
				)
VALUE (
	'{$username}',
	'{$email}',
	'{$password}',
	'{$fullname}',
	'{$birthday}',
	'{$sex}'
)
";
$query= mysqli_query($conf, $sql);




//Thông báo quá trình lưu
if ($query)
echo "Quá trình đăng ký thành công. <a href='Home.php'>Về trang chủ</a>";
else
echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
?>