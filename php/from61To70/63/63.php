<!-- lọc chuỗi -->
<?php
    $name = "Alex";
    $stringFilter = filter_var($name, FILTER_SANITIZE_STRING); // do FILTER_SANITIZE_STRING đã bị loại bỏ từ PHP 8.1.0
    echo $stringFilter;
?>