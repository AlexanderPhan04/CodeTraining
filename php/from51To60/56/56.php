<!-- tạo cookie -->
<?php
    /*
    cookie là một file nhỏ được lưu trữ trên máy tính của người dùng bởi trình duyệt web. 
    Cookie thường được sử dụng để lưu trữ thông tin về phiên làm việc của người dùng, 
    như thông tin đăng nhập, tùy chọn cá nhân hóa, và các dữ liệu khác mà trang web muốn ghi nhớ giữa các lần truy cập.
    */ 
    /*
    có 3 tham số chính khi tạo cookie:
    - Tên cookie: tên duy nhất để xác định cookie.
    - Giá trị cookie: dữ liệu được lưu trữ trong cookie.
    - Thời gian hết hạn: thời gian mà cookie sẽ tồn tại trên trình duyệt của người dùng.
    */
    $cookieName= "user"; // tên cookie
    $cookieValue = "Alex"; // giá trị cookie

    setcookie($cookieName, $cookieValue, time()+(2592000), "/"); // thời gian hết hạn cookie là 30 ngày
    // time()+(thời gian tính bằng giây * số giây trong một ngày) : đặt thời gian hết hạn cookie
    // "/" : cookie có thể truy cập từ bất kỳ trang nào trên trang web

    if(isset($_COOKIE[$cookieName])) {
        echo "Cookie " . $cookieName . " is set!";
        echo "<br>";
    } else {
        echo "Cookie " . $cookieName . " is not set!";
        echo "<br>";
    }
?>