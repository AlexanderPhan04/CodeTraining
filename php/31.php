<!-- vòng lặp for với array -->
<?php
    $name = array("Alex", "Simon", "Kayn");
    for($i = 0; $i < count($name); $i++) {
        echo $name[$i];
        echo "<br>";
    }
?>