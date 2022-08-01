<?php
   include 'config.php';

if(isset($_POST["username"])) {
$username = $_POST["username"];
$password = $_POST["password"];
$password = md5($password);

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$query = mysqli_query($conn, $sql);
//Hàm mysqli_fetch_assoc() sẽ tìm và trả về một dòng kết quả của một truy vấn MySQL nào đó dưới dạng một mảng kết hợp.
//$query là kết quả của truy vấn, là kết quả trả về của các hàm: mysqli_query(), mysqli_store_result() hoặc mysqli_use_result().
$data = mysqli_fetch_assoc($query);
// mysqli_num_rows() trả về số lượng hàng trong một tập kết quả
$checkname = mysqli_num_rows($query);
		if($checkname > 0){
			$_SESSION['user'] = $data;
			header ('location: index.php');
				
		}else{
			header('location:login.php');
			
		}
}
?>

