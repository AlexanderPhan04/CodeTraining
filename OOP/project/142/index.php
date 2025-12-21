<!-- OOP - sửa dữ liệu -->
<?php
    include 'config/database.php';

    $data = new Database();

    $data->select('SELECT * FROM users');
    
    $i = 0;
    while ($row = $data->fetch())
    { 
        $i++; ?>
        <tr>
            <td><?php echo "Full name: " . $row['full_name'] . "<br>"; ?></td>
            <td><?php echo "User name: " . $row['user'] . "<br>"; ?></td>
            <td><?php echo "Password: " . $row['pass'] . "<br>"; ?></td>
            <span><a href="edit.php?this_id=<?php echo $row['id'] ?>">Edit</a></span>
            <br>
        </tr>
    <?php } ?>


