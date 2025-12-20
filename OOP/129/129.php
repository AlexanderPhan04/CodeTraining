<!-- OOP - hàm khởi tạo và tính kế thừa -->
<?php
    class A
    {
        function __construct()
        {
            echo 'A';
        }
    }

    class B extends A
    {
        function __construct()
        {
            echo 'B';
        }
    }

    class C extends B
    {
        function __construct()
        {
            echo 'C';
        }
    }

    // $a = new B();
    $obj = new C();

    /*
    rút ra kết luận sau khi học bài này thì 
    1. nếu có class như trên thì người dùng muốn gọi cái nào tự gọi và khởi tạo đối tượng đó
    2. nó chỉ gọi cái khác nếu đối tượng còn mà người dùng gọi trống rỗng (cùng hàm __construct()) và có tính kế thừa
    */ 
?>