<!-- 99, 100, 101-->
<?php
    include 'connect.php';
    $this_id = $_GET['this_id'];
    echo $this_id;
    $sql = "SELECT * FROM product WHERE id='$this_id'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query); // hàm mysqli_fetch_assoc lấy một hàng kết quả dưới dạng mảng kết hợp dùng để truy cập các cột bằng tên của chúng

    if (isset($_POST['btn'])) {
        $product_name = $_POST['name'];
        $product_price = $_POST['price'];
        $guarantee = $_POST['guarantee'];
        $product_photo = $_FILES['images']['name'];
        $img_tmp_name = $_FILES['images']['tmp_name'];
        $sql = "UPDATE product SET product_name='$product_name', product_photo='$product_photo',
        product_price='$product_price', guarantee='$guarantee' WHERE id='$this_id'";
        mysqli_query($conn, $sql);
        move_uploaded_file($img_tmp_name, "img/product/" . $product_photo);
        header('location: products.php');
    }
?>

<h1>Product <?php echo $row['product_name']; ?> </h1>
<form action="" method="post" enctype="multipart/form-data">
    <p>Name</p>
    <input type="text" name="name" value="<?php echo $row['product_name'] ?>">
    <p>Image</p>
    <span><img src="img/product/<?php echo $row['product_photo'] ?>" alt="" width="50px" height="50px"></span>
    <input type="file" name="images" value="<?php echo $row['product_photo'] ?>">
    <p>Price</p>
    <input type="text" name="price" value="<?php echo $row['product_price'] ?>">
    <p>Guarantee</p>
    <input type="text" name="guarantee" value="<?php echo $row['guarantee'] ?>">
    <br>
    <button name="btn">Edit</button>
</form>