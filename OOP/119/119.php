<!-- OOP - thực hành hàm constructor -->
<?php
class superHero
{
    public $name;
    public $power;

    // không đặt tên hàm constructor trùng với tên lớp nữa vì sau phiên bản PHP 7.0 trở đi sẽ không còn hỗ trợ nữa
    // function superHero() 
    function __construct($a, $b)
    {
        $this->name = $a;
        $this->power = $b;
    }
}

$spidey = new superHero("Peter Parker", 100);
$bellion = new superHero("Bellion", 200);
$beru = new superHero("Beru", 150);

echo $spidey->name . " - " . $spidey->power;
echo "<br>";
echo $bellion->name . " - " . $bellion->power;
echo "<br>";
echo $beru->name . " -  " . $beru->power;
?>