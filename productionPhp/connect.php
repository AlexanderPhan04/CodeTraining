<!-- 95 -->
<?php
    $server = 'localhost';
    $username = 'root';
    $pass = 'quan2004';
    $DBname = 'web_php_training';

    $conn = new mysqli($server, $username, $pass, $DBname);
    if ($conn) {
        mysqli_query($conn, "SET NAMES 'UTF8'");
        echo "DB connected successfully";
    } else {
        echo "DB connection failed";
    }
?>