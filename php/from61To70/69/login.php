<!-- chức năng đăng nhập, đăng ký, đăng xuất -->

<?php
    session_start();
    
    if (isset($_SESSION['email'])) {
        header('location: admin.php');
    }

    if(isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        if($email == 'admin@gmail.com' && $password == '123456') {
            $_SESSION['email'] = $email;
            header('location: admin.php');
        } else {
            echo "email or password incorrect";
        }
    }
?>
<form action="login.php" method="post">
    <label for="">Email</label>
    <br>
    <input type="text" name="email">
    <br>
    <label for="">Password</label>
    <br>
    <input type="password" name="password">
    <br>
    <button type="submit" name="login">login</button>
</form>