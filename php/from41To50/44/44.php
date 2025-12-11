<!-- bắt sự kiện -->

<?php
    if(isset($_POST['btn'])) {
        echo "you sended";
    }
?>
<form action="43.php" method="post">
    <input type="text" name="name">
    <input type="submit" value="send" name="btn">
</form>