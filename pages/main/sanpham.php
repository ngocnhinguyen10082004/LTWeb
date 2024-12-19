<?php
	$sql_chitiet = "SELECT * FROM pk_sanpham,pk_danhmuc WHERE pk_sanpham.id_danhmuc=pk_danhmuc.id_danhmuc AND pk_sanpham.id_sanpham='$_GET[id]'LIMIT 1";
	$query_chitiet= mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet=mysqli_fetch_array($query_chitiet)){
?>
<div class ="wrapper_chitiet">
    <div class ="hinhanh_sanpham">
        <img width=100% src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
    </div>
    <form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php  echo $row_chitiet['id_sanpham'] ?>">
    <div class ="chitiet_sanpham">
        <h3 style="margin:0"> <?php echo $row_chitiet['tensanpham'] ?></h3>
        <p>Mã sản phẩm: <?php echo $row_chitiet['masp'] ?></p>
        <p>Giá cả: <?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ' ?></p>
        <p>Số lượng : <?php echo $row_chitiet['soluong'] ?></p>
        <p><?php echo $row_chitiet['noidung'] ?></p>
        <p>Danh mục: <?php echo $row_chitiet['tendanhmuc'] ?></p>
        <?php
        if($row_chitiet['soluong']>0){

      
        ?>
        <p><?php echo $row_chitiet['tomtat'] ?></p>
        <p><input class="themgiohang" name="themgiohang" type="submit" value ="Thêm giỏ hàng"></p>
        <?php
         } else{
        ?>
        <span class ="text text-danger">Số lượng hàng đã hết</span>
        <?php
         }
        ?>
    </div>
    </form>
</div>
<?php
}
?>
