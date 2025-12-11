<!-- upload file lên thư mục -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="handle.php" method="post" enctype="multipart/form-data">
    <input type="file" name="img" value="pick_img"> 
    <br>
    <input type="submit" name="btn" value="Send">
</form>
</body>
</html>