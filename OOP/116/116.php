<!-- OOP - hành động -->
<?php
    class superHero
    {
        public $name;
        public $color;
        public $power;

        function sayHi()
        {
            return "Hi";
        }

        function attribute()
        {
            $s = $this->name;
            $s .= $this->color;
            $s .= $this->power;
            
            return $s;
        }
    }
    // $spidey = new superHero();
    $spidey->name = "Peter Parker";
    $spidey->color = "red-blue";
    $spidey->power = 100;

    echo $spidey->attribute();
    echo "<br>";

    echo $spidey->name;
    echo "<br>";
    echo $spidey->sayHi();
?>