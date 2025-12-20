<!-- OOP - class abstract -->
<?php
    abstract class person
    {
        protected $name;
        protected $age;

        abstract public function showInfo();
    }

    class student extends person
    {
        public function showInfo()
        {
            
        }
    }
?>