<!-- OOP - hàm khởi tạo -->
<?php
    class student
    {
        function __construct($value)
        {
            echo $value;
        }
    }

    $Alex = new student('hello');
?>