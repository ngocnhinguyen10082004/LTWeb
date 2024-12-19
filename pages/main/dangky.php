<?php
	// session_start(); 
    	if(isset($_POST['dangky']))
    	{
        	$tenkhachhang = $_POST['hovaten'];
        	$taikhoan = $_POST['taikhoan'];
        	$dienthoai = $_POST['dienthoai'];
        	$matkhau = md5($_POST['matkhau']);
        	$sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,taikhoan,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$taikhoan."','".$matkhau."','".$dienthoai."') ");
        	if($sql_dangky)
        	{
				    echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
            		$_SESSION['dangky'] = $tenkhachhang;
            		$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
            		header('Location:index.php?quanly=giohang');
        	}
    	}
?>
<style type = "text/css">
	.container 
	{
        	text-align:	center;
    	}	
    	table.dangky 
    	{
        	margin:	auto;
        	border-collapse:collapse;
    	}
    	table.dangky tr td 
    	{
        	padding:5px;
    	}
</style>
<div class = "container">
    <b><p> Đăng Ký Tài Khoản </p></b>
    <form action = "" method = "POST">
        <table id="table1" class = "dangky" >
            <tr>
                <td> Họ và Tên</td>
                <td><input type = "text" size="50%" name = "hovaten"></td>
            </tr>
            <tr>
                <td> Tài Khoản </td>
                <td><input type = "text" size="50%" name = "taikhoan"></td>
            </tr>
            <tr>
                <td> Mật Khẩu </td>
                <td><input type = "text" size="50%" name = "matkhau"></td>
            </tr>
            <tr>
                <td> Điện Thoại </td>
                <td><input type = "text" size = "50%" name =  "dienthoai"></td>
            </tr>
            <tr>
                <td><input type = "submit" name = "dangky" value = "Đăng Ký"></td>
		<td><a class="login_link" href="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a></td>
            </tr>
        </table>
    </form>
</div>
