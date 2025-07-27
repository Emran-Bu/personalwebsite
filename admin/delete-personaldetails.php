<?php

    include 'config.php';
    $personal_id = $_GET['id'];

    $sql1 = "SELECT * FROM personaldetails where id = {$personal_id}";
    $result = mysqli_query($conn, $sql1) or die("Query Failed: Select");
    $row = mysqli_fetch_assoc($result);

    unlink("assets/img/cv/".$row['cv']);
    unlink("assets/img/ppic/".$row['pic']);

    $sql = "DELETE FROM personaldetails where id = {$personal_id};";

    if (mysqli_multi_query($conn, $sql)) {
        header("Location: {$hostname}/admin/personaldetailslist.php");
    }else {
        // echo"Query unsuccessful";
        echo "<p style='color: red; text-align:center; margin: 10px 0;'>Can't delete the user record</p>";
    }
    mysqli_close($conn);
?>