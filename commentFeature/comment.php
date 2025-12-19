<!-- 112 -->
<?php
    include 'config/connect.php';
    $prd_id = $_GET['prd_id'];
    echo $prd_id;
    echo "<br>";

    $getname = "SELECT product_name FROM product WHERE product_id = '$prd_id'";
    $query = mysqli_query($conn, $getname);
    $prd_name = mysqli_fetch_array($query)['product_name'];
    echo $prd_name;
    echo "<br>";

    $sql = "SELECT name, content
    FROM comment INNER JOIN product INNER JOIN users
    ON comment.product_id=product.product_id AND
    comment.user = users.user
    WHERE product_name LIKE '%$prd_name%'
    ORDER BY comment_id DESC LIMIT 0,5";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo $row['content'];
    }
?>

<form action="addComment.php?prd_id= <?php echo $prd_id  ?>" method="post">
    <input type="text" name="comment">
    <button type="submit" name="cmt_btn">Comment</button>
</form>