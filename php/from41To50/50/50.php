<!-- viết vào file -->

<?php
    // hàm fopen để mở file a là chế độ ghi file a là chế độ ghi file, nếu file đã tồn tại thì sẽ ghi dữ liệu mới vào cuối file, nếu file chưa tồn tại thì sẽ tạo file mới
    $myFile = fopen("file.txt", "a") or die ("lỗi"); 
    fwrite($myFile, "đây là nội dụng được viết vào file"); // hàm fwrite để viết vào file
    fclose($myFile); // hàm fclose để đóng file
?>