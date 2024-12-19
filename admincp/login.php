<?php 
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username = '".$taikhoan."' AND password = '".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<script> alert("Tài khoản hoặc mật khẩu không đúng!");</script>';
			header("Location:login.php");
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập Admincp</title>
	<style type="text/css">
		body{
			background: #f4f7fa;
			font-family: Arial, sans-serif;
			color: #333;
			margin: 0;
			padding: 0;
		}
		.wrapper-login {
			width: 30%;
			margin: 5% auto;
			padding: 20px;
			background: #fff;
			border-radius: 10px;
			box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
		}
		.wrapper-login h3 {
			text-align: center;
			font-size: 24px;
			color: #2c3e50;
			margin-bottom: 20px;
		}
		table.table-login {
			width: 100%;
			border-collapse: collapse;
		}
		table.table-login tr td {
			padding: 10px;
			font-size: 14px;
		}
		table.table-login input[type="text"], 
		table.table-login input[type="password"] {
			width: 100%;
			padding: 8px;
			border: 1px solid #ccc;
			border-radius: 5px;
			font-size: 14px;
			box-sizing: border-box;
		}
		table.table-login input[type="submit"] {
			width: 100%;
			padding: 10px;
			border: none;
			background-color: #3498db;
			color: white;
			font-size: 16px;
			border-radius: 5px;
			cursor: pointer;
		}
		table.table-login input[type="submit"]:hover {
			background-color: #2980b9;
		}
		table.table-login tr td {
			border-bottom: 1px solid #ddd;
		}
		/* Responsive Design */
		@media screen and (max-width: 768px) {
			.wrapper-login {
				width: 70%;
			}
		}
	</style>
</head>
<body>
	<div class="wrapper-login" >
	<form action="" autocomplete="off" method="POST">
	<table id="table1" class="table-login">
		<tr>
			<td colspan="2"><h3>Đăng nhập Admin</h3></td>
		</tr>
		<tr>
			<td>Tài khoản</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Mật khẩu</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
		</tr>
	</table>
	</form>
	</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
</html>
