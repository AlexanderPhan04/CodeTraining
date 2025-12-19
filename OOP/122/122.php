<!-- OOP - cậu lệnh public -->
<?php
    class animal
    {
        public $eye;
        public $head;
    }

    // public: có thể truy cập từ bên ngoài lớp
    $cat = new animal();
    $cat->eye = "black";
    $cat->head = "small";
    echo $cat->eye;
?>