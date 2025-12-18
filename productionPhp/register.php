<!-- 107 -->
<?php
    include 'connect.php';
    if (isset($_POST['btn'])) {
        $id = "";
        $username = $_POST['username'];
        $password = $_POST['password'];
        $level = 2;
        $sql = "INSERT INTO users (username, password, level) VALUES ('$username', '$password', '$level')";
        mysqli_query($conn, $sql);
    }
?>

<form action="register.php" method="post">
    <label for="">user name</label>
    <input type="text" name="username">
    <label for="">password</label>
    <input type="password" name="password">
    <button type="submit" name="btn">Singup</button>
</form>