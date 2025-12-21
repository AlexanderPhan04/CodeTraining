<!-- OOP - kế thừa interface -->
<?php
    interface A
    {
        public function funA();
    }
    interface B extends A
    {
        public function funB();
    }

    // class C implements B
    // {
    //     public function funA()
    //     {
    //         echo 'fun A';
    //     }
    //     public function funB()
    //     {
    //         echo 'fun B';
    //     }
    // }

    class D implements B
    {
        public function funA()
        {
            echo 'fun A';
        }
        public function funB()
        {
            echo 'fun B';
        }
    }
?>