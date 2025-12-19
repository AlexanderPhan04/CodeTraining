<!-- OOP - kế thừa lồng -->
<?php
    class A
    {
        public $public_A = 'public';
        private $private_A = 'private';
        protected $protected_A = 'protected';

        function showPublic()
        {
            echo $this->public_A;
        }

        private function showPrivate()
        {
            echo $this->private_A;
        }

        protected function showProtected()
        {
            echo $this->protected_A;
        }
    }

    class B extends A
    {

    }

    class C extends B
    {

    }

    $object = new C();
    $object->showProtected();
?>