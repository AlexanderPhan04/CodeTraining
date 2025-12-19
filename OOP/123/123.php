<!-- OOP - cậu lệnh private -->
<?php
    class hero
    {
        public $name;
        private $power;

        function setPower($a)
        {
            if ($a > 0) {
                $this->power = $a;
            } else
            {
                $this->power = 0;
            }
        }

        function getPower()
        {
            return $this->power;
        }
    }

    $spidey = new hero();
    // $spidey->name = "Peter";
    
    $spidey->setPower(80);
    echo $spidey->getPower();
?>