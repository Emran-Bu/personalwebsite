<?php

    include 'config.php';
    $work_id = $_GET['id'];

    // $sql1 = "SELECT * FROM workhistory where id = {$work_id}";
    // $result = mysqli_query($conn, $sql1) or die("Query Failed: Select");
    // $row = mysqli_fetch_assoc($result);

    $sql = "DELETE FROM workhistory where id = {$work_id};";

    if (mysqli_multi_query($conn, $sql)) {
        $msg = "<p style='color: red; text-align:center; margin: 10px 0;'>Successfully deleted the work History</p>";
        // header("Location: {$hostname}/admin/workhistorylist.php");
    }else {
        // echo"Query unsuccessful";
        $msg = "<p style='color: red; text-align:center; margin: 10px 0;'>Can't delete the work History</p>";
    }
    mysqli_close($conn);
?>