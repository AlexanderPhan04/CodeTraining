<!-- chức năng đăng nhập, đăng ký, đăng xuất -->
<?php
    session_start();
    if(!isset($_SESSION['email'])) { // kiểm tra đã đăng nhập chưa
        header('location: login.php'); // nếu chưa đăng nhập thì chuyển về trang login
    }
?>
<h1>Đây là trang admin</h1>
<a href="logout.php">
    <button type="submit" name="logout">Logout</button>
</a>