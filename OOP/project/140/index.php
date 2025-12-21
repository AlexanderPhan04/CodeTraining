<!-- OOP - lấy dữ liệu -->
<?php
    include 'config/database.php';

    $data = new Database();

    $data->select('SELECT * FROM users');

    $i = 0;
    while ($r = $data->fetch()) {
        $i++;

        echo "<tr";
        echo "<h1>" . $r['id'] . "</h1>";
        echo "<td>" . $r['full_name'] . "</td>";
        echo "<td>" . $r['user'] . "</td>";
        echo "<td>" . $r['pass'] . "</td>";
        echo "</tr>";

        echo "<br>";
    }
?>