<?php
    include 'config/connect.php';
    $sql = "SELECT * FROM product";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) { ?>
        <a href="comment.php?prd_id= <?php echo $row['product_id']; ?>">
        <?php echo $row['product_name']; ?>
        </a>
        <br>
    <?php } ?>
