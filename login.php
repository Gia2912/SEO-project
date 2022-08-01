<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
	integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"> 
	<title></title>
	<link href="./Css/login.css" type="text/css" rel="stylesheet">
</head>
<body>
	<form action="login_submit.php" method="POST">
		<a href="index.php"><i class="fas fa-arrow-circle-left" style="color: darkgreen; font-size:35px;"></i></a>
		<h2>ĐĂNG NHẬP</h2>
		<label>User Name </label>
		<input type="text" name="username" placeholder="User Name">

		<label>Password </label>
		<input type="password" name="password" placeholder="Passwork">

		<p>Chưa <a href="dangky.php"><strong>đăng ký <strong></a> tài khoản.</p>

		<button type="submit" name="submit">Login</button>

	</form>
</body>
</html>