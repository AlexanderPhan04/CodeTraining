<!-- thêm dữ liệu MySQL -->
<?php
    include 'connect.php';
    $id = "";
    $username = "admin";
    $pass = "123456";
    $level = 1;

    $sql = "INSERT INTO users(id, username, password, level)
    VALUES ('$id', '$username', '$pass', '$level')";

    mysqli_query($conn, $sql);
?>