<!-- điều kiện form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $nameError = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") { // kiểm tra phương thức gửi form
        if(empty($_POST['name'])) { // kiểm tra nếu trường name rỗng
            $nameError = "name is required";
        } else {
            echo $_POST['name']; // xử lý khi không có lỗi
        }
    }
    ?>
    <form action="41.php" method="post">
        Name: <input type="text" name="name">
        <span class="error"><?php echo $nameError ?></span> <!-- hiển thị lỗi nếu có -->
        <br>
        <input type="submit" name="submit" value="send">
    </form>
</body>
</html>