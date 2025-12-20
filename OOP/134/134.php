<!-- OOP - interface -->
<?php
    // interface A
    // {
    //     const constA = 'Hello';
    // }

    // class B implements A
    // {
    //     const constA = 'hi';
    // }
    /*
    khi dùng class thì dùng từ khóa extends để kế thừa
    còn khi dùng interface thì dùng từ khóa implements để kế thừa
    */

    interface Dog
    {
        function bark();
        function run();    
    }

    class babyDog implements Dog
    {
        protected function bark()
        {
            echo "Gâu gâu";
        }
        public function
    }
?>