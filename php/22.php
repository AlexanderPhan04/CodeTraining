<!-- vòng lặp do while -->
<?php
    $i = 1;
    do {
        echo $i;
        $i++;
        echo "<br>";
    } while($i <= 10);
    /*
    khác với for, while. do while sẽ thực hiện khối lệnh ít nhất 1 lần rồi mới kiểm tra điều kiện.
    ở for, while nếu điều kiện sai ngay từ đầu thì khối lệnh sẽ không được thực hiện.
    */ 
?>