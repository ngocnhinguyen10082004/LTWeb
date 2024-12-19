<div id="main">
<?php
	$showsidebar = !(isset($_GET['quanly']) && in_array($_GET['quanly'], ['trangchu', 'giohang', 'dangky', 'dangnhap']));
    	if ($showsidebar) 
    	{
        	include("sidebar/sidebar.php");
    	}
?>
<div class="maincontent <?php echo $showsidebar ? '' : 'maincontent-full'; ?>">
<?php
        if (isset($_GET['quanly'])) 
        {
            	$tam = $_GET['quanly'];
        } 
        else 
        {
            	$tam = '';
        }
       	if ($tam == 'trangchu') 
        {
            	include ("main/trangchu.php");
        } 
        elseif ($tam == 'danhmucsanpham') 
        {
            	include ("main/danhmuc.php"); 
        }
        elseif ($tam == 'sanpham') 
        {
            	include ("main/sanpham.php");
        }
        elseif ($tam == 'giohang') 
        {
            	include ("main/giohang.php");
        }  
        elseif ($tam == 'dangky')
        {
        	include ("main/dangky.php");
        }
        elseif ($tam == 'dangnhap')
        {
        	include ("main/dangnhap.php");
        }
        elseif ($tam == 'thanhtoan')
        {
        	include ("main/thanhtoan.php");
        }
        elseif ($tam == 'camon')
        {
        	include ("main/camon.php");
        }
        else 
        {
            	include ("main/index.php");
        }
?>
</div>
