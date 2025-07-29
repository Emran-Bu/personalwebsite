<?php
include "header.php"; 

    if (isset($_GET['id'])) {

        $service_id = $_GET['id'];

    if (isset($_POST['update'])) {
    include 'config.php';

    if (empty($_FILES['serviceimg']['name'])) {
        $file_name = $_POST['oldpic'];
    }
    
    else {
        $errors = array();
        $file_name = "updated_".date("Y_m_d_h_i_sa").$_FILES['serviceimg']['name'];
        $file_size = $_FILES['serviceimg']['size'];
        $file_tmp = $_FILES['serviceimg']['tmp_name'];
        $file_type = $_FILES['serviceimg']['type'];
        $file_ext1 = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext1));
        // $file_ext = strtolower(end(explode('.', $picfile_name)));
        $extension = array("jpeg", "jpg", "png");
    
        if (in_array($file_ext, $extension) === false) {
            $errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
        }
    
        if ($file_size > 10485760) {
            $errors[] = "File size must be 10mb or lower.";
        }
    
        if (empty($errors) == true) {
            $oldpic = $_REQUEST['oldpic'];
            $path = "assets/img/services/$oldpic";
            unlink($path);
            // if ($post_id == $_GET['id']) {
            //     unlink($path);
            // }
            move_uploaded_file($file_tmp, "assets/img/services/".$file_name);
        }else {
            print_r($errors);
            die();
        }
    }


    $servicename = mysqli_real_escape_string($conn, $_POST['servicename']);
    $servicetitle1 = mysqli_real_escape_string($conn, $_POST['servicetitle1']);
    $servicetitle2 = mysqli_real_escape_string($conn, $_POST['servicetitle2']);
    $servicetitle3 = mysqli_real_escape_string($conn, $_POST['servicetitle3']);
    $servicetitle4 = mysqli_real_escape_string($conn, $_POST['servicetitle4']);
    $servicetitle5 = mysqli_real_escape_string($conn, $_POST['servicetitle5']);
    $servicetitle6 = mysqli_real_escape_string($conn, $_POST['servicetitle6']);

    $sql = "UPDATE services set servicename= '$servicename', servicetitle1= '$servicetitle1', servicetitle2 ='$servicetitle2', servicetitle3 = '$servicetitle3', servicetitle4 = '$servicetitle4', servicetitle5 = '$servicetitle5', servicetitle6 = '$servicetitle6', serviceimg = '$file_name' where id = $service_id";

    if (mysqli_multi_query($conn, $sql)) {
        $msg = "<p style='color: green; text-align:center; margin: 10px 0;'>Successfully Updated the Services</p>";
        // header("Location: {$hostname}/admin/personaldetailslist.php");
    } else {
         $msg = "<p style='color: red; text-align:center; margin: 10px 0;'>Can't updated the Services</p>";
    }


    }
      

    }

?>

<div class="container mr-5">

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Your Services</h3></div>
                <div class="card-body">

                        <?php if(isset($msg)) echo $msg ?>
                    
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">  

                        <?php

                            // include 'config.php';

                            $service_id = $_GET['id'];
                            
                            $sql = "SELECT * FROM services where id = {$service_id}";

                                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Service Name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Service name" name="servicename" value="<?php echo $row['servicename']; ?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Service Title 1</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Service Title 1" name="servicetitle1" value="<?php echo $row['servicetitle1']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Service Title 2</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Service Title 2" name="servicetitle2" value="<?php echo $row['servicetitle2']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Service Title 3</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Service Title 3" name="servicetitle3" value="<?php echo $row['servicetitle3']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Service Title 4</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter Service Title 4" name="servicetitle4" value="<?php echo $row['servicetitle4']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Service Title 5</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter Service Title 5" name="servicetitle5" value="<?php echo $row['servicetitle5']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Service Title 6</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter Service Title 6" name="servicetitle6" value="<?php echo $row['servicetitle6']; ?>"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1 form-label d-block" for="inputEmailAddress">Image</label>
                                    <input style="border:2px dotted green;" class="px-3 py-3" type="file" id="formFile" name="serviceimg">
                                    <input style="border:2px dotted green;" class="px-3 py-3" type="text" id="formFile" name="oldpic" value="<?php echo $row['serviceimg']; ?>" hidden>
                                    <img class="mt-4" src="assets/img/services/<?php echo $row['serviceimg']; ?>" height="150px" width="150px" alt="">
                                </div>
                            </div>

                            
                          </tr>
                          <?php 
                           }} ?>

                        </div>

                        <div class="form-group mt-4 mb-0"><input value="Update" type="Submit" class="btn btn-primary btn-block" name="update"></div>
                    
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>



<?php include "footer.php"; ?>
