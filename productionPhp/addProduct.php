<!-- 97 -->
<?php
    include 'connect.php';

    if (isset($_POST['btn'])) {
        $name = $_POST['name'];
        $image = $_FILES['images']['name'];
        $image_tmp_name = $_FILES['images']['tmp_name'];
        $price = $_POST['price'];
        $guarantee = $_POST['guarantee'];

        $sqlin = "INSERT INTO product(product_name, product_photo, product_price, guarantee)
        VALUES ('$name', '$image', '$price', '$guarantee')";

        mysqli_query($conn, $sqlin);

        move_uploaded_file($image_tmp_name, "img/product/" . $image);
    }
?>

<form action="addProduct.php" method="post" enctype="multipart/form-data">
    <p>Name</p>
    <input type="text" name="name">
    <p>Image</p>
    <input type="file" name="images">
    <p>Price</p>
    <input type="text" name="price">
    <p>Guarantee</p>
    <input type="text" name="guarantee">
    <br>
    <button id="submit" name="btn">Send</button>
</form>