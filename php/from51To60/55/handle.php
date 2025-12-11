
<?php
    $fouder = "img/";
    $var = $fouder . basename($_FILES['img']['name']); // tạo đường dẫn lưu file upload hàm basename lấy tên file từ đường dẫn đầy đủ
    if(isset($_POST['btn'])) { // kiểm tra nút submit đã được nhấn
        if(isset($_FILES['img'])) { // kiểm tra file đã được chọn
            if($_FILES['img']['size'] == 0) { // kiểm tra kích thước file
                echo "not file selected";
            } else if(file_exists($var)) { // kiểm tra file đã tồn tại trong thư mục đích chưa bằng hàm file_exists
                echo "file already exists";
            } else if($_FILES['img']['size'] > 2000000) { // kiểm tra kích thước file có vượt quá 2MB không
                echo "file size too large";
            } else {
                // hàm move_uploaded_file dùng để di chuyển file từ thư mục tạm sang thư mục đích
                // $_FILES['img']['tmp_name'] là đường dẫn tạm thời của file
                // './/img/' . $_FILES['img']['name'] là đường dẫn đích để lưu file
                move_uploaded_file($_FILES['img']['tmp_name'], './/img/' . $_FILES['img']['name']);
                echo "upload success";
            }
        } else {
            echo "false to upload file";
        }
    }
?>