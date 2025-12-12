<!-- tạo bảng -->
<?php
    include 'connect.php';
    $sql = "CREATE TABLE users( 
        id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL,
        level INT(6)
        )";

        // thực thi truy vấn
        if ($conn->query($sql) == TRUE) { // phương thức query
            echo "Table users created successfully";
        } else {
            echo "Error creating table: " . $conn -> error; // thuộc tính error trả về lỗi câu lệnh
        }
?>