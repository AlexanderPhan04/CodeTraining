<!-- làm việc với array -->
<?php
    /*
    có 3 cách để khởi tạo mảng trong php
    1. Mảng chứa chỉ số
    2. Mảng kết hợp
    3. Mảng đa chiều
    */ 
    $name = array("Alex", "Simon", "Hanzo", "Dustin");
    // echo $name[0];
    // print_r($name); // in ra cấu trúc mảng
    // echo "<br>";
    // echo count($name); // đếm số phần tử trong mảng
    // echo "<br>";
    
    $name[1] = "Kayn"; // thêm phần tử
    print_r($name);

    // xóa phần tử
    unset($name[2]);
    echo "<br>";
    print_r($name); // in ra cấu trúc mảng sau khi xóa
?>