<!-- hàm isset() -->
<?php
    $a = 10;
    isset($a); // kiểm tra biến $a đã được khởi tạo hay chưa
    if (isset($a)) {
        echo "biến a đã được khởi tạo";
    } else {
        echo "biến a chưa được khởi tạo";
    }
?>