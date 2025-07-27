<?php

    include 'config.php';
    $project_id = $_GET['id'];

    $sql1 = "SELECT * FROM projects where id = {$project_id}";
    $result = mysqli_query($conn, $sql1) or die("Query Failed: Select");
    $row = mysqli_fetch_assoc($result);

    unlink("assets/img/projects/".$row['pimg']);

    $sql = "DELETE FROM projects where id = {$project_id};";

    if (mysqli_multi_query($conn, $sql)) {
        $msg = "<p style='color: green; text-align:center; margin: 10px 0;'>Successfully Deleted the project</p>";
        // header("Location: {$hostname}/admin/servicedetailslist.php");
    }else {
        // echo"Query unsuccessful";
        // echo "<p style='color: red; text-align:center; margin: 10px 0;'>Can't delete the user record</p>";
         $msg = "<p style='color: red; text-align:center; margin: 10px 0;'>Can't Deleted the project</p>";
    }
    mysqli_close($conn);
?>