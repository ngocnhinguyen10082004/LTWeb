<?php
    $sql_lietke_sp ="SELECT *FROM pk_sanpham,pk_danhmuc WHERE pk_sanpham.id_danhmuc=pk_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
    $query_lietke_sp= mysqli_query($mysqli,$sql_lietke_sp);
?>
<p> Liệt kê sản phẩm </p>
<table id="table2">
  <tr>
    <th>Id</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá sp</th>
    <th>Số lượng</th>
    <th>Số lượng bán</th>
    <th>Danh mục</th>
    <th>Mã sp</th>
    <th>Tóm tắt</th>
    <th>Trạng thái </th>
  </tr>
  <?php
  $i=0;
  while($row=mysqli_fetch_array($query_lietke_sp)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['soluongban'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td>
      <?php if($row['tinhtrang'==1]){
      echo 'Kích hoạt';
    }else{
      echo 'Ẩn';
    } 
    ?>
    </td>
    <td>
        <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xóa</a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a>
    </td>
  </tr>
 <?php
  } 
 ?>
</table>
