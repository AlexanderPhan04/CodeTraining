<!-- câu lệnh if else | else if -->
<?php
    $a = 5;

    if($a < 10) {
        echo "biến a bé hơn 10";
    } else {
        echo "biến a lớn hơn 10 hoặc bằng 10";
    }

    $b = 50;
    if($a < 10) {
        echo "biến a bé hơn 10";
    } else if($b < 20) {
        echo "biến b bé hơn 20";
    } else if($b < 30) {
        echo "biến b bé hơn 30";
    } else {
        echo "tất cả điều kiện đều sai";
    }
?>