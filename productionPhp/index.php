<!-- 106 - 108-->
<?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('location: login.php');
    }
    include 'connect.php';
    if (isset($_POST['btn'])) {
        $content = $_POST['search'];
    } else {
        echo $content = false;
    }
?>

<h1>This is index</h1>
<a href="logout.php">
    <button type="submit" name="logout">Logout</button>
</a>

<form action="" method="post">
    <input type="text" name="search">
    <button type="submit" name="btn">Search</button>
</form>

<?php
    $sql = "SELECT * FROM product WHERE product_name LIKE '%$content%'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) { ?>
        <h1><?php echo $row['product_name']; ?> </h1>
    <?php } ?>
