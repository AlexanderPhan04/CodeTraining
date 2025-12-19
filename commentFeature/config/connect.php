<!-- 112 -->
<?php
    $server = 'localhost';
    $username = 'root';
    $pass = 'quan2004';
    $DBname = 'comment_feature';

    $conn = new mysqli($server, $username, $pass, $DBname);
    if ($conn) {
        mysqli_query($conn, "SET NAMES 'UTF8'");
    } else {
        echo "DB connection failed";
    }
        
    /*SELECT name, content
    FROM comment INNER JOIN product INNER JOIN users ON 
    comment.product_id=product.product_id AND comment.user = users.user
    WHERE product_name LIKE '%IP%'
    ORDER BY comment_id DESC LIMIT 0,5 */
?>
