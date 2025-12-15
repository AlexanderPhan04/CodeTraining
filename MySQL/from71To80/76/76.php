<!-- tạo DB -->
<?php
    include 'connect.php';
    $sql = "CREATE DATABASE myWeb1"; // câu lệnh tạo DB
    if (mysqli_query($conn, $sql)) { // hàm mysqli_query thực thi câu lệnh
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . mysqli_error($conn); // hàm mysqli_error trả về lỗi câu lệnh
    }
?>