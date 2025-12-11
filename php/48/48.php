<!-- vòng lặp với file -->

<?php
    $myFiles = fopen("file.txt", "r") or die ("lỗi");
    while (!feof($myFiles)) { // hàm feof để kiểm tra kết thúc file
        echo fgets($myFiles) . "<br>"; // hàm fgets để đọc từng dòng trong file
    }
    fclose($myFiles);
?>