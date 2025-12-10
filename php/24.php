<!-- vòng lặp for với array -->
<?php
    $name = array( // khởi tạo mảng
        "Alex",
        "Simon",
        "Vargas",
        "Dustin"
    );

    echo count($name); // đếm sô phần tử trong mảng
    echo "<br>";
    echo $name[0]; //truy cập phần từ trong mảng
    echo "<br>";
    
    for($i = 0; $i < count($name); $i++) { // có biến i bằng 4 là số phần tử trỏng mảng
        echo $name[$i]; // 
        echo "<br>";
    }
?>