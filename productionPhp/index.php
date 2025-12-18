<!-- 106 -->
<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location: login.php');
    }
    include 'connect.php';
    include 'products.php';
    include 'addProduct.php';
?>

<h1>This is index</h1>
<a href="logout.php">
    <button type="submit" name="logout">Logout</button>
</a>

<form action="" method="post">
    <input type="text" name="search">
    <button type="submit" name="btn">Search</button>
</form>