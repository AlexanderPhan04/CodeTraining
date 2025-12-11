<!-- lọc IP -->
<?php
    $IP = "127.0.0.1";
    if(!filter_var($IP, FILTER_VALIDATE_IP) == false) { // trả về false nếu không phải IP hợp lệ
        echo "this is IP";
    } else {
        echo "this is not IP";
    }
?>