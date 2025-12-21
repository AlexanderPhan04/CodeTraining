<form action="" method="post">
    <input type="text" name="full_name" placeholder="Full name">
    <input type="text" name="user_name" placeholder="Account">
    <input type="password" name="password" placeholder="Password">
    <input type="submit" name="submit" value="Send">
</form>

<?php
    $this_id = $_GET['this_id'];
    include 'config/database.php';

    $data = new Database();

    if (isset($_POST['submit'])) {
        $full_name = $_POST['full_name'];
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        $data->command("UPDATE users SET full_name = '$full_name', user = '$user_name', pass = '$password' WHERE users.id =". $this_id);
    }
?>