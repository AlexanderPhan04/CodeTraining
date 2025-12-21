<!-- OOP - thêm dữ liệu -->
<form action="" method="post">
    <input type="text" name="full_name" placeholder="Full name">
    <input type="text" name="user_name" placeholder="Account">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Send">
</form>

<?php
    include 'config/database.php';

    $data = new Database();

    if (isset($_POST['submit'])) {
        $full_name = $_POST['full_name'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        $data->command("INSERT INTO users(id, full_name, user, pass) VALUES (NULL, '$full_name', '$user_name', '$password')");
    }
?>

