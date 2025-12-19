<?php
    include 'config/connect.php';
    $prd_id = $_GET['prd_id'];
    echo $prd_id . "|";
    $content = $_POST['comment'];
    echo $content;
    $sql = "INSERT INTO comment(comment_id, content, product_id, user) VALUES (NULL, '$content', '$prd_id', 'alex')";
    mysqli_query($conn, $sql);
    header('location: comment.php?prd_id=' . $prd_id);
?>