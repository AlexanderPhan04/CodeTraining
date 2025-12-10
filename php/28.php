<!-- array cơ bản -->
<?php
    /*
    có 3 cách để khởi tạo mảng trong php
    1. Mảng chứa chỉ số
    2. Mảng kết hợp
    3. Mảng đa chiều
    */ 

    // cách 1
    // $name = array(
    //     "Alex",
    //     "Simon",
    //     "Vargas",
    //     "Dustin"
    // );
    // echo $name[0] . ", " . $name[1] . ", " . $name[2] . ", " . $name[3]; 
    // echo "<br>";

    // // cách 2
    // $name[0] = "Hanzo";
    // $name[1] = "Kayn";
    // $name[2] = "Urban";
    // $name[3] = "Leona";

    // echo $name[0] . ", " . $name[1] . ", " . $name[2] . ", " . $name[3]; 
    // echo "<br>";

    // // cách 3
    // $info = array("Darling"=>"2004", "Smith"=>"2005", "Rhaast"=>"2006");
    // echo $info['Darling'];
    // echo "<br>";

    // $INFO['Hash'] = 2004 . " BC";
    // $INFO['Luna'] = 2005;
    // $INFO['Ezreal'] = 2006;

    // echo $INFO['Hash'];
    // echo "<br>";

    $myArray = array(
        array("A ", " 2100 ", " VN"),
        array("B", "2122", "EN"),
        array("C", "2123", "TQ")
    );
    echo $myArray[0][0];
    echo $myArray[0][1];
    echo $myArray[0][2];
    echo "<br>";
    echo $myArray[1][0];
    echo $myArray[1][1];
    echo $myArray[1][2];
?>