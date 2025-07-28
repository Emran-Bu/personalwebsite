<?php

    include 'config.php';

    $con_id = $_GET['id'];

    $sql = "DELETE FROM contact where id = {$con_id};";

    if (mysqli_multi_query($conn, $sql)) {
        $msg = "<p style='color: red; text-align:center; margin: 10px 0;'>Successfully deleted the customer contact message</p>";
        // header("Location: {$hostname}/admin/workhistorylist.php");
    }else {
        // echo"Query unsuccessful";
        $msg = "<p style='color: red; text-align:center; margin: 10px 0;'>Can't delete the customer contact message</p>";
    }

    mysqli_close($conn);
    
?>