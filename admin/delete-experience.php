<?php

    include 'config.php';
    $ex_id = $_GET['id'];

    $sql = "DELETE FROM experience where id = {$ex_id};";

    if (mysqli_multi_query($conn, $sql)) {
        $msg = "<p style='color: red; text-align:center; margin: 10px 0;'>Successfully deleted the work experience</p>";
        // header("Location: {$hostname}/admin/workhistorylist.php");
    }else {
        // echo"Query unsuccessful";
        $msg = "<p style='color: red; text-align:center; margin: 10px 0;'>Can't delete the work experience</p>";
    }
    mysqli_close($conn);
?>