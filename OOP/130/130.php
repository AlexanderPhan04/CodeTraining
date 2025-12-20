<!-- OOP - hàm destruct() -->
<?php
    class myClass
    {
        function __construct()
        {
            echo 'object created';
        }

        function __destruct()
        {
            echo 'object delete';
        }
    }

    $object = new myClass();
?>