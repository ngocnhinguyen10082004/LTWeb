<div class="sidebar">
        <ul class="list_sidebar">
	<?php
  		$sql_danhmuc = "SELECT * FROM pk_danhmuc ORDER BY id_danhmuc DESC";
     	        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);    
		While($row = mysqli_fetch_array($query_danhmuc))
		{ 
	?>
            	<b><li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc']?></b></a></li>
			<?php
		}
			?>
        </ul>
</div>
