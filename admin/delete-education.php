<?php

    include 'config.php';
    $edu_id = $_GET['id'];

    $sql = "DELETE FROM education where id = {$edu_id};";

    if (mysqli_multi_query($conn, $sql)) {
        $msg = "<p style='color: red; text-align:center; margin: 10px 0;'>Successfully deleted the education</p>";
        // header("Location: {$hostname}/admin/workhistorylist.php");
    }else {
        // echo"Query unsuccessful";
        $msg = "<p style='color: red; text-align:center; margin: 10px 0;'>Can't delete the education</p>";
    }
    mysqli_close($conn);
?>