<!-- OOP - tính kế thừa -->
<?php
    class Animal
    {
        public $eye;
        public $nose;
        public $mouth;

        function eat()
        {
            echo "Ăn uống";
        }
    }

    class Dog extends Animal
    {
        function bark()
        {
            $this->eye = "2 mắt";
            $this->nose = "1 mũi";
            $this->mouth = "1 miệng";

            parent::eat();
        }
    }

    $dogGold = new Dog();
    $dogGold->bark();
    echo $dogGold->eye;
    echo $dogGold->nose;
?>