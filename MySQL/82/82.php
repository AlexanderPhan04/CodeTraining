<!-- chèn thẻ html vào mysql -->
<?php
    include 'connect.php';

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_array($result)) 
    { // tạo biến row là mảng kết hợp và lấy từng dòng dữ liệu

?>

    <h1><?php echo $row['id'] . " "; ?></h1>
    <hr>
<?php } ?>