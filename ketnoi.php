<?php 
    $conf = mysqli_connect('localhost', 'root' , '', 'loginkiumin');
    //dia chi server localhost, username mac dinh la root , password , ten database can ket noi
    if (mysqli_connect_error())
     {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
     }
    mysqli_set_charset($conf,"utf8");

 ?>