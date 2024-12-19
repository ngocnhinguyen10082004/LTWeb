<?php
        $sql_pro = "SELECT * FROM pk_sanpham,pk_danhmuc WHERE pk_sanpham.id_danhmuc=pk_danhmuc.id_danhmuc ORDER BY pk_sanpham.id_sanpham DESC LIMIT 25";
        $query_pro = mysqli_query($mysqli,$sql_pro);

?>
                        <ul class="product_list">
                                <?php
                                        While($row = mysqli_fetch_array($query_pro)){ 
                                ?>
                				<li>
                                        <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                                        <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>">
                    					<p class="title_product"> <?php echo $row['tensanpham'] ?> </p>
                                        <p class="price_product"> <?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></p>
                                        </a>
                				</li>
                                <?php
                                }
                                ?>
                        </ul>
