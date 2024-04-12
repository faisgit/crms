<?php
    include 'db-conn.php';
    $id = $_REQUEST['id'];
    $delete =  "DELETE FROM result WHERE id = $id";
    $sql = mysqli_query($conn,$delete);
    header("Location:index.php");
?>