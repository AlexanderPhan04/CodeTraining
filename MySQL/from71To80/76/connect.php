<?php
/*để kết nối với DB cần 4 giá trị
    1. tên serve
    2. user name
    3. password
    4. tên DB*/
$server = 'localhost';
$user = 'root';
$password = 'quan2004';
$DB = 'myWeb';

// tạo kết nối 
$conn = new mysqli($server, $user, $password, $DB); // hàm mysqli_connect trả về đối tượng kết nối

if ($conn) {
    mysqli_query($conn, "SET NAMES 'UTF8'"); // thiết lập font chữ UTF8 cho kết nối

} else {
    echo "Connection failed: " . mysqli_connect_error(); // hàm trả về lỗi kết nối
}
