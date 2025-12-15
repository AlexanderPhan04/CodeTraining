<!-- câu lệnh LIMIT trong mysql -->
<?php
    include 'connect.php';
    /*
    WHERE = điều kiện lọc dữ liệu
    AND  = kết hợp nhiều điều kiện
    OR = một trong các điều kiện đúng
    LIKE = tìm kiếm theo mẫu
    ORDER BY = sắp xếp kết quả
    LIMIT = giới hạn số kết quả trả về
    */ 

    // câu lệnh LIMIT dùng để giới hạn số kết quả trả về
    $sql = "SELECT * FROM users LIMIT 2";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_array($result)) {
            echo $row['id'] . "|" . $row['username'] . "|" . $row['password'] . "|" . $row['level'];
            echo "<br>";
        }
    }

?>