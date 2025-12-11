<!-- chức năng đăng nhập, đăng ký, đăng xuất -->

<?php
    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo "Email: " . $email . "<br>";
        echo "Password: " . $password . "<br>";
    }
?>
<form action="login.php" method="post">
    <label for="">Email</label>
    <br>
    <input type="text" name="email">
    <br>
    <label for="">Password</label>
    <br>
    <input type="password">
    <br>
    <button type="submit" name="login">login</button>
</form>