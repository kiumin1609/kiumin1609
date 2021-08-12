<?php 
	session_start();
	if (isset($_SESSION['username'])) {
		unset($_SESSION['username']);
		session_destroy();
		 echo "<script>";
          echo "window.location.href='/Project1/Home.php'";
          echo "</script>";
	}
	else{
		 echo "<script>";
          echo "window.location.href='/Project1/Home.php'";
          echo "</script>";
	}

 ?>
