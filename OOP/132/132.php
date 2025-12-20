<!-- OOP - class final -->
<?php
    final class student
    {
        function __construct()
        {
            echo 'hi im student';
        }
    }

    // không thể kế thừa từ class final
    // class Alex extends student
    // {
        
    // }

    $Alex = new student();
?>