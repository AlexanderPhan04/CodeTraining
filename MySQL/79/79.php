<!-- lấy dữ liệu MySQL -->
<?php
    include 'connect.php';

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    echo mysqli_num_rows($result); // hàm mysqli_num_rows trả về số dòng kết quả
    echo "<br>";

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_num_rows($result); // lấy số dòng kết quả
        echo $row;
        echo "<br>";
    }
?>