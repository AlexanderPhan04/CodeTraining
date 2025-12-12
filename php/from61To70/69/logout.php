<!-- chức năng đăng nhập, đăng ký, đăng xuất -->
<?php
    session_start();
    if (isset($_SESSION['email'])) {
        unset($_SESSION['email']);
    }

    header('location: login.php');
?>