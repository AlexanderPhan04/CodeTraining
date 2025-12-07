<!-- chuỗi -->
<?php
    echo "Alex";
    // hàm strlen: đếm độ dài của chuỗi bao gồm cả dấu cách
    echo "Hàm strlen";
    echo "<br>";
    echo strlen("Alex");
    echo "<br>";
    // hàm str_word_cout: đếm số từ trong chuỗi
    echo "Hàm str_word_count";
    echo "<br>";
    echo str_word_count("Alex Phan");
    echo "<br>";
    // hàm strrev: đảo ngược chuỗi
    echo "Hàm strrev";
    echo "<br>";
    echo strrev("Alex Phan");
    echo "<br>";
    // hàm strpos: tìm vị trí xuất hiện đầu tiên của chuỗi con trong chuỗi mẹ
    echo "Hàm strpos";
    echo "<br>";
    echo strpos("Alex Phan", "Phan"); //giá trị thứ nhất là chuỗi mẹ, giá trị thứ hai là đi tìm chuỗi con: ví dụ xuất hiện ở vị trí thứ 5 tính từ 0
    echo "<br>";
    // hàm str_replace: thay thế chuỗi con trong chuỗi mẹ
    echo "Hàm str_replace";
    echo "<br>";
    echo str_replace("Alex", "Simon", "Alex Vargas Phan");
    echo "<br>";
?>