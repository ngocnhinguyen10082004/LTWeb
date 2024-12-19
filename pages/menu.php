<?php
	if(isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) 
	{
		unset($_SESSION['dangky']);
	}
?>
<div class="menu">
	<ul class="list_menu">
        	<b><li><a href="index.php?quanly=trangchu">Trang Chủ</a></li></b>
        	<b><li><a href="index.php">Sản Phẩm</a></li></b>
        	<b><li><a href="index.php?quanly=danhmucsanpham&id=1">Phân Loại</a></li></b>
        	<b><li><a href="index.php?quanly=giohang">Giỏ Hàng</a></li></b>
        	<?php if(isset($_SESSION['dangky'])) 
        	{ 
        // 		session_start();
        	?>
        		<b><li><a href="index.php?dangxuat=1">Đăng Xuất</a></li></b>
        	<?php 
        	} 
        	else 
        	{ 	
        	?>
            		<b><li><a href="index.php?quanly=dangky">Đăng Ký </a></li></b>
        	<?php 
        	} 
       		?>
    	</ul>	
</div>
