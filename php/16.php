<!-- toán tử phần 1 -->
<?php
/*
- Toán tử số học
- Toán tử gán
- Toán tử so sánh
- Toán tử tăng và giảm
- Toán tử logic
- Toán tử chuỗi
- Toán tử mảng
- Toán tử gán có điều kiện
*/
    // toán tử số học
    echo "Toán tử số học";
    echo "<br>";
    $a = 5;
    $b = 5;
    echo "sau khi cộng kết quả là $a + $b"; // phép cộng
    echo "<br>";
    // tương tự với các phép trừ (-), nhân (*), chia (/), chia lấy dư (%)
    // toán tử gán
    $c = 10; // gán giá trị 10 cho biến c
    $c +=100; // tương đương $c = $c + 100
    // tương đương  += còn có các phép toán khác như: -=, *=, /=
    // còn %= là chia lấy dư (còn gọi là modulo)
    echo "Toán tử gán";
    echo "<br>";
    echo "sau khi gán kết quả là $c";
    echo "<br>";
    // toán tử so sánh
    echo "Toán tử so sánh";
    echo "<br>";
    $d = 5;
    $e = "10";
    if ($d < $e) { // == là so sánh 
        echo "$d nhỏ hơn $e";
    } else if($d === $e) { // === là so sánh cả giá trị và kiểu dữ liệu
        echo "$d bằng $e và cùng kiểu dữ liệu";
    } else if($d != $e) {
        echo "$d khác $e";
    } else {
        echo "$d không bằng $e";
    }
?>