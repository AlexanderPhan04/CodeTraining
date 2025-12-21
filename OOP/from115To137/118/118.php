<!-- OOP - hàm constructor -->
<?php
    class superHero
    {
        public $name;
        public $power;

        // hàm constructor
        function superHero($a, $b)
        {
            $this->name = $a;
            $this->power = $b;
        }
    }

    $spidey = new superHero("Peter Parker", 100);

    echo $spidey->name;
    echo "<br>";
    echo $spidey->power;
?>