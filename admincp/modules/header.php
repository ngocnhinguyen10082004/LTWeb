<?php 
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangnhap']);
    header('location:login.php');
}
?>

<p><a class="logout_link" href="index.php?dangxuat=1">Đăng xuất : <?php if(isset($_SESSION['dangnhap'])) {
    echo $_SESSION['dangnhap'];
} ?></p></a>
