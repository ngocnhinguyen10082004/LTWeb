<?php 
	session_start(); 
	if(isset($_POST['dangnhap']))
	{
		$email = $_POST['email'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_dangky WHERE taikhoan = '".$taikhoan."' AND matkhau = '".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0)
		{
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['id_khachhang'] = $row_data['id_dangki'];
			header("Location:index.php?quanly=giohang");
		}
		else
		{
			echo '<p style="color:red">Mật khẩu hoặc email không chính xác</p>';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="form_container">
		<form action="" autocomplete="off" method="POST">
			<table id="table1"  class="table_login">
				<tr>
					<td colspan="2"><h3>Đăng Nhập Tài Khoản</h3></td>
				</tr>
				<tr>
					<td>Tài Khoản</td>
					<td><input type="text" size="65" name="email" placeholder="Email..."></td>
				</tr>
				<tr>
					<td>Mật Khẩu</td>
					<td><input type="password" size="65" name="password" placeholder="Mật khẩu..."></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>
