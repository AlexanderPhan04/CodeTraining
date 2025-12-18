<!-- 96 - 101-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Bảo hành</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include 'connect.php';
            $sql = "SELECT * FROM product";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($result)) {
                
            
        ?>
        <br>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['product_name'] ?></td>
            <td><img width="30" height="40" src="img\product\<?php echo $row['product_photo'] ?>" alt=""></td>
            <td><?php echo $row['product_price'] ?></td>
            <td><?php echo $row['guarantee'] ?></td>
            <span><a href="deleteProduct.php?this_id=<?php echo $row['id'] ?>">Delete</a></span>
            <span><a href="editProduct.php?this_id=<?php echo $row['id'] ?>">Edit</a></span>
            <br><br>
        </tr>
        <?php } ?>
    </tbody>
    <br>
    <a href="addProduct.php">Add</a>
</body>
</html>