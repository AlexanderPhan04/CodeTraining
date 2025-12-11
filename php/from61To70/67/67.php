<!-- lọc URL -->
<?php
    $url = "https://www.youtube.com/watch?v=DSC3_pxUa2c&list=PLaevEBkXyvnXEMoe6ZHFJGjPDb_eCCVNc&index=68";
    $url = filter_var($url, FILTER_SANITIZE_URL); // lọc url
    if(!filter_var($url, FILTER_VALIDATE_URL) == false) {
        echo "this is url";
    } else {
        echo "this is not url";
    }
?>