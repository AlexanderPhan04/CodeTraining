<!-- toán tử phần 2 -->
<?php
    // toán tử logic
    echo "Toán tử logic";
    echo "<br>";
    $a = 10;
    $b = 1;
    
    if($a > 5 && $b < 5) { 
        /*
        && nghĩa là và 
        || nghĩa là hoặc, có thể dùng "or" thay thế
        xor nghĩa là loại trừ (nếu một trong hai đúng thì kết quả đúng) nếu cả 2 đúng hoặc cả 2 sai thì kết quả sai
         */ 
        echo "Đúng";
        echo "<br>";
    } 
    // toán tử chuỗi
    echo "Toán tử chuỗi";
    echo "<br>";
    $c = "Alex";
    $d = "Phan";
    $e = $c . $d; // dấu chấm (.) là phép nối chuỗi
    $c .= $d; // .= là phép nối chuỗi và gán
    echo $c . $d; // nối chuỗi và in ra
    echo "<br>";
    echo $c;
    echo "<br>";
    echo $e;
    echo "<br>";
?>