delete-services.php
<?php

    include 'config.php';
    $service_id = $_GET['id'];

    $sql1 = "SELECT * FROM services where id = {$service_id}";
    $result = mysqli_query($conn, $sql1) or die("Query Failed: Select");
    $row = mysqli_fetch_assoc($result);

    unlink("assets/img/services/".$row['serviceimg']);

    $sql = "DELETE FROM services where id = {$service_id};";

    if (mysqli_multi_query($conn, $sql)) {
        $msg = "<p style='color: green; text-align:center; margin: 10px 0;'>Successfully Deleted the Services</p>";
        // header("Location: {$hostname}/admin/servicedetailslist.php");
    }else {
        // echo"Query unsuccessful";
        // echo "<p style='color: red; text-align:center; margin: 10px 0;'>Can't delete the user record</p>";
         $msg = "<p style='color: red; text-align:center; margin: 10px 0;'>Can't Deleted the Services</p>";
    }
    mysqli_close($conn);
?>