<!-- biến toàn cầu -->

<form action="36.php" method="post">
    <input type="text" name="data">
    <input type="submit">
</form>
<form action="36.php" method="get">
    <input type="text" name="data">
    <input type="submit">
</form>
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

    // $a = 5;
    // $b = 10;

    // function sum() {
    //     $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b']; // sử dụng biến toàn cầu thông qua mảng toàn cầu $GLOBALS
    // }
    // sum(); 
    // echo $c;

    echo $_POST['data']; // phương thức post thường được sử dụng để gửi dữ liệu nhạy cảm
    echo $_GET['data']; // phương thức get thường được sử dụng để gửi dữ liệu không nhạy cảm
    echo $_REQUEST['data']; // có thể nhận cả dữ liệu từ phương thức post và get thường dùng để test

    
?>