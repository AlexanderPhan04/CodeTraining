<!-- 98 -->
<?php
    include 'connect.php';
    $this_id = $_GET['this_id'];
    echo $this_id;
    $sql = "DELETE FROM product WHERE id='$this_id'";
    mysqli_query($conn, $sql);
    header('location: products.php');
?>