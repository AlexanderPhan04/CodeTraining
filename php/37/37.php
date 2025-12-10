<!-- gộp file -->
<?php
    // nếu dùng require_once, require khi code lỗi thì sẽ báo lỗi và dừng chương trình
    // nếu dùng include_once, include khi code lỗi thì sẽ chỉ cảnh báo và chương trình vẫn chạy tiếp
    require_once 'require_once.php'; // require_once chỉ bao gồm một lần thường dùng để gộp file
    require 'require.php'; // require bao gồm nhiều lần thường dùng để gộp file
    include 'include.php'; // include bao gồm nhiều lần nhưng nếu file không tồn tại thì chỉ cảnh báo và vẫn chạy tiếp
    include_once 'include.php'; // include_once chỉ bao gồm một lần nhưng nếu file không tồn tại thì chỉ cảnh báo và vẫn chạy tiếp
?>