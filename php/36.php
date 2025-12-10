<!-- biến toàn cầu -->
<?php
    /*
    có 3 kiểu biến toàn cầu trong php;
    1. $_GLOBALS: chứa tất cả các biến toàn cầu trong php
    2. $_POST: chứa dữ liệu được gửi từ form với phương thức post
    3. $_GET: chứa dữ liệu được gửi từ form với phương thức get
    */ 
    // $a = 5;
    // $b = 10;

    // function sum() {
    //     $c = $a + $b;
    //     echo $c;
    // }
    // sum(); // lỗi vì biến $a và $b không được khai báo là toàn cầu trong hàm sum

    $a = 5;
    $b = 10;

    function sum() {
        $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    }
    sum(); 
    echo $c;
    
?>