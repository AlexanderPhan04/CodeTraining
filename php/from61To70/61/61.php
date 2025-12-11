<!-- sửa session -->
<?php
    // session là một cách để lưu trữ thông tin người dùng trên máy chủ trong suốt phiên làm việc của họ trên trang web. 
    // session thường được sử dụng để lưu trữ thông tin đăng nhập, giỏ hàng mua sắm, và các dữ liệu khác mà trang web muốn ghi nhớ giữa các lần truy cập của người dùng.
    session_start(); // khởi động session
    $_SESSION['name'] = "Alex"; // sửa giá trị session ở đay
    echo $_SESSION['name'];
?>