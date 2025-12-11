<!-- tạo thời gian -->
<?php
    /*
    H - Định dạng giờ 24 giờ (00 đến 23)
    h - Định dạng giờ 12 giờ với số 0 đứng đầu (01 đến 12)
    i - Phút với số 0 đứng đầu (00 đến 59)
    s - Giây với số 0 đứng đầu (00 đến 59)
    a - Chữ thường Ante meridiem và Post meridiem (sáng hoặc chiều)
    A - Chữ hoa Ante meridiem và Post meridiem (sáng hoặc chiều)
    Y - Biểu diễn số đầy đủ của năm, 4 chữ số (2024)
    m - Biểu diễn số của tháng, với số 0 đứng đầu (01 đến 12)
    d - Ngày trong tháng, 2 chữ số với số 0 đứng đầu (01 đến 31)
    */
echo date("H:i:sa") . " today " . date("Y-m-d");
?>