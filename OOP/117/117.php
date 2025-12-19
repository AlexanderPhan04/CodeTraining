<!-- OOP - hàm rút gọn -->
<?php
    class superHero
    {
        public $name;
        public $power;

        function value($a, $b)
        {
            $this->name = $a;
            $this->power = $b;
        }
    }

    // $spidey = new superHero();
    $spidey->value("Peter Parker", 100);

    echo $spidey->name;
    echo "<br>";
    echo $spidey->power;
?>