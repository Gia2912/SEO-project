<?php
    include 'config.php';

    if(isset($_POST["username"]) && $_POST["username"] != '' && $_POST["password"] != '' && $_POST["repassword"] != '')
    {
    	$username = $_POST["username"];
    	$password = $_POST["password"];
    	$repassword = $_POST["repassword"];

    	if($password != $repassword){
    		header("location:dangky.php");
    	}

    	$sql = "SELECT * FROM user WHERE username = '$username' ";
   //mysql_query là dùng để truy vấn cơ sở dữ liệu
   //$conn($connect) là kết nối MySQL
   //$sql là truy vấn
  $old = mysqli_query($conn, $sql);
  $password = md5($password);

  if(mysqli_num_rows($old) > 0 ){
    header("location: dangky.php");
	} else {

      $sql = "INSERT INTO user (username,password) VALUES ('$username','$password') ";
      $query = mysqli_query($conn,$sql);
       if($query){
      header("location: login.php");
    	} 
 	}
}
?>