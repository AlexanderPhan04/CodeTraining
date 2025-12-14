<!-- xóa dữ liệu trong mysql -->
<?php
    include 'connect.php';

    $sql = "DELETE FROM users WHERE id='2'";
    
    mysqli_query($conn, $sql);
?>