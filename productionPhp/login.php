<!-- 104, 105 -->
<?php
    include 'connect.php';
    session_start();
    if (isset($_SESSION['username'])) {
        header('location: index.php');
    }

    if (isset($_POST['btn_login'])) {
        $username = $_POST['user_name'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            header('location: index.php');
        } else {
            echo "login failed";
        }
    }
?>
<form action="login.php" method="post">
    <label for="">User name</label>
    <input type="text" name="user_name" id="">
    <label for="">Password</label>
    <input type="password" name="password">
    <button type="submit" name="btn_login">Login</button>
</form>

<a href="register.php"><button>Register</button></a>