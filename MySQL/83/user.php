<?php
    include 'connect.php';

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) 
        {

    
?>
    <!-- cách 1 -->
    <h1>
        <tr>
            <td><?php echo $row['id'] . " "; ?></td>
            <td><?php echo $row['username'] . " "; ?></td>
            <td><?php echo $row['password'] . " "; ?></td>
            <td><?php echo $row['level'] . " "; ?></td>
            <span><a href="edit.php?this_id= <?php echo $row['id'] ?>">Edit</a></span>
            <span><a href="delete.php?this_id= <?php echo $row['id'] ?>">Delete</a></span>
        </tr>        
    </h1>
    <!-- cách 2 -->
    <!-- 
        <h1>
        <tr>
            <td>
            <?php
            /*
                echo $row['id'] . " ";
                echo $row['username'] . " ";
                echo $row['password'] . " ";
                echo $row['level'] . " ";
            */
            ?>
            </td>
            <span><a href="">Fix</a></span>
            <span><a href="">Delete</a></span>
        </tr>
    </h1>
    -->
    

<?php } ?>