<?php 
     session_start();   
     include('../../admincp/config/config.php');
     $id_khachhang = $_SESSION['id_khachhang'];
     $code_order = rand(0,9999);
     $insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status) VALUE('".$id_khachhang."','".$code_order."',1)";
     $cart_query = mysqli_query($mysqli,$insert_cart);
     if($cart_query){
	foreach ($_SESSION['cart'] as $key => $value) {
		$id_sanpham = $value['id'];
		$soluong = $value['soluong'];
		$insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham,code_cart,soluongmua) VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
		mysqli_query($mysqli,$insert_order_details);
		$sql_chitiet = "SELECT * FROM pk_sanpham WHERE pk_sanpham.id_sanpham='$id_sanpham'LIMIT 1";
		$query_chitiet= mysqli_query($mysqli,$sql_chitiet);
    	while($row_chitiet=mysqli_fetch_array($query_chitiet)){
			$soluongtong = $row_chitiet['soluong'];
			$soluongcon = $row_chitiet['soluong'] - $soluong;
			$soluongbanra = $soluong + $row_chitiet['soluongban'] ;
		}
		$sql_update_sl="UPDATE pk_sanpham
		SET soluong='".$soluongcon."',soluongban='".$soluongbanra."' WHERE id_sanpham='$id_sanpham'";
		mysqli_query($mysqli,$sql_update_sl);
		}
		
	}
	unset($_SESSION['cart']);
	header('Location:../../index.php?quanly=camon');
 ?>
