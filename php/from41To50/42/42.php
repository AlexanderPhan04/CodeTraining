<!-- điều kiện form năng cao -->
<?php
    $nameError = "";
    $name = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['name'])) {
            $nameError = "not be empty";
        } else {
            $name = $_POST['name'];
            if (!preg_match("/^[a-zA-Z]*$/", $name)) {
                $nameError = "no special characters";
            } else {
                echo "Nihao, " . $name;
            }
        }
    }
?>

<form action="42.php" method="post">
    Name: <input type="text" name="name">
    <span style="color: red;"><?php echo $nameError ?></span>
    <br>
    <input type="submit" name="submit" value="send">
</form>