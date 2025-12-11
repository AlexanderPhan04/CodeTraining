<!-- lọc email -->
<?php
    $gmail = "quannnd2004@gmail.com";
    $gmail = filter_var($gmail, FILTER_SANITIZE_EMAIL); // lọc email
    if(!filter_var($gmail, FILTER_VALIDATE_EMAIL) == false) {
        echo "this is email";
    } else {
        echo "this is not email";
    }
?>