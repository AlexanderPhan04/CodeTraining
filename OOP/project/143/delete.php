<?php
    include 'config/database.php';
    $data = new Database();

    $this_id = $_GET['this_id'];
    $data->command("DELETE FROM users WHERE users.id =". $this_id);
    header('location: index.php');
?>