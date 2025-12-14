<!-- sửa dữ liệu mysql -->
<?php
    include 'connect.php';

    $id = 2;
    $user_name = 'agent';
    $pass = '123456';
    $level = 2;

    $sql = "UPDATE users SET id='$id', username='$user_name', password='$pass', level='$level' WHERE id='2'";
    mysqli_query($conn, $sql);
?>