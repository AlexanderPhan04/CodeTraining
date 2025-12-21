<!-- 115 tìm hiểu về hướng đối tượng -->
<?php
    // tạo lớp động vật
    class Animal
    {
        public $name;
        public $act;
        public $color;
        public $age;
    }

    // gán giá trị cho đối tượng
    // // chó là động vật
    // $dog = new Animal();
    // $dog->name = "gold";
    // $dog->act = "bark";
    // $dog->corlor = "black";

    // echo $dog->name . "|";
    // echo $dog->act;


    $cat = new Animal();
    $cat->name = "Moon";
    $cat->act = "meow";
    $cat->age = 2;

    echo $cat->name;
?>