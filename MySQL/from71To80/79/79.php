<!-- lấy dữ liệu MySQL -->
<?php
    include 'connect.php';

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    echo mysqli_num_rows($result); // hàm mysqli_num_rows đếm số dòng trong kết quả truy vấn
    echo "<br>";

    if (mysqli_num_rows($result) > 0) {
        // xuất dữ liệu của mỗi dòng
        while($row = mysqli_fetch_array($result)) { // hàm mysqli_fetch_array lấy từng dòng và lưu vào biến row dưới dạng mảng kết hợp
            echo $row['id'] . "|" . $row['username'] . "|" . $row['password'] . "|" . $row['level'];
            echo "<br>";
        }
    }
?>