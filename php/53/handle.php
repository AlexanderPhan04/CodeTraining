<?php
    if(isset($_POST['btn'])) {
        if(isset($_FILES['img'])) {
            if($_FILES['img']['size'] == 0) {
                echo "not file selected";
            } else {
                // hàm move_uploaded_file dùng để di chuyển file từ thư mục tạm sang thư mục đích
                // $_FILES['img']['tmp_name'] là đường dẫn tạm thời của file
                // './/img/' . $_FILES['img']['name'] là đường dẫn đích để lưu file
                move_uploaded_file($_FILES['img']['tmp_name'], './/img/' . $_FILES['img']['name']);
                echo "upload success";
            }
        }
    }
?>