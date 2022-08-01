
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link href="./Css/login.css" type="text/css" rel="stylesheet">
</head>
<body>
		<form action="dki_submit.php" method="POST">
		<a href="index.php"><i class="fas fa-arrow-circle-left" style="color: darkgreen; font-size:35px;"></i></a>
		<h2>ĐĂNG KÝ</h2>
		<label>User Name </label>
		<input required type="text" name="username" placeholder="Tên đăng nhập">

		<label>Password </label>
		<input required type="password" name="password" placeholder="Mật khẩu">

		<label>Nhập lại password </label>
		<input required type="password" name="repassword" placeholder="Nhập lại mật khẩu">

		<p><a href="login.php"><strong>Đăng nhập <strong></a>tài khoản đã có. </p>

		<button type="submit" name="submit">Đăng ký</button>
	</form>
</body>
</html>