<!-- đọc file phần 2 -->
<?php
    /*
    đọc file
    xử lý file
    vòng lặp file
    tạo file
    viết vào file
    viết đè lên file
    upload file
    */ 
    /*
    r là chế độ đọc file
    r+ là chế độ đọc và ghi file
    w là chế độ ghi file, nếu file đã tồn tại thì sẽ xóa hết dữ liệu cũ và ghi đè dữ liệu mới vào, nếu file chưa tồn tại thì sẽ tạo file mới
    w+ là chế độ đọc và ghi file, nếu file đã tồn tại thì sẽ xóa hết dữ liệu cũ và ghi đè dữ liệu mới vào, nếu file chưa tồn tại thì sẽ tạo file mới
    a là chế độ ghi file, nếu file đã tồn tại thì sẽ ghi dữ liệu mới vào cuối file, nếu file chưa tồn tại thì sẽ tạo file mới
    a+ là chế độ đọc và ghi file, nếu file đã tồn tại thì sẽ ghi dữ liệu mới vào cuối file, nếu file chưa tồn tại thì sẽ tạo file mới
    */
    // $myFile = fopen("file.txt", "r") or die ("lỗi"); //hàm fopen để mở file
    // echo fread($myFile, filesize("file.txt")); // hàm fread để đọc file
    // fclose($myFile); // hàm fclose để đóng file
    $myFiles = fopen("file1.txt", "r") or die ("lỗi");
    echo fgets($myFiles); // hàm fgets để đọc từng dòng trong file
    fclose($myFiles); // hàm fclose để đóng file
?>