<!-- function -->
<?php
    // function myZhongGuo() {
    //     echo "Ni hao, ZhongGuo";
    // }
    // myZhongGuo();

    function ZhongGuo($name) {
        echo "Ni hao, ZhongGuo, wo shi $name";
    }
    ZhongGuo("ri juan");
    echo "<br>";
    ZhongGuo("si mei");
    echo "<br>";
    ZhongGuo("wang ling");
    echo "<br>";

    function thongTin($name, $age) {
        echo "Wo de mingzi shi $name, wo $age sui";
    }
    thongTin("Ri Juan", 21);
    echo "<br>";
    thongTin("Si Mei", 21);
    echo "<br>";
    thongTin("Wang Ling", 22);
    echo "<br>";

    function phepCong(int $a, int $b) {
        $tong = $a + $b;
        return $tong; // trả về giá trị
    }
    echo phepCong(5, 10) . "<br>";
    echo phepCong(10, 10) . "<br>";
?>