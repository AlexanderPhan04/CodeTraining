<!-- chức năng tìm kiếm -->

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        if ($name == "Alex") {
            echo "Nihao Alex";
        } else if ($name == "Simom"){
            echo "Nihao Simom";
        } else {
            echo "Nihao Khach";
        }
    } 
?>
<form action="43.php" method="post">
    <input type="text" name="name">
    <input type="submit" >
</form>