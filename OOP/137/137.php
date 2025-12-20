<!-- OOP - tính đa hình -->
<?php
    class animal
    {
        function eat()
        {
            echo "Animal is eating";
        }
    }

    class pig extends animal
    {
        public function eat()
        {
            parent::eat();
            echo "Pig is eating";
        }
    }

    class tiger extends animal
    {
        public function eat()
        {
            echo "Tiger is eating";
        }
    }

    $Pig = new pig();
    $Pig->eat();
?>