<!-- lọc số nguyên -->
<?php
    $integer = 123;
    // dùng hàm filter_var để lọc số nguyên, FILTER_VALIDATE_INT là bộ lọc để kiểm tra số nguyên
    if(!filter_var($integer, FILTER_VALIDATE_INT) == false) {
        echo "this is integer";
    } else {
        echo "this is not integer";
    }
?>