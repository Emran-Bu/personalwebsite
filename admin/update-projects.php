<?php
include "header.php"; 

    if (isset($_GET['id'])) {

        $project_id = $_GET['id'];

    if (isset($_POST['update'])) {
    include 'config.php';

    if (empty($_FILES['pimg']['name'])) {
        $file_name = $_POST['oldpic'];
    }
    
    else {
        $errors = array();
        $file_name = "updated_".date("Y_m_d_h_i_sa").$_FILES['pimg']['name'];
        $file_size = $_FILES['pimg']['size'];
        $file_tmp = $_FILES['pimg']['tmp_name'];
        $file_type = $_FILES['pimg']['type'];
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
            $path = "assets/img/projects/$oldpic";
            unlink($path);
            // if ($post_id == $_GET['id']) {
            //     unlink($path);
            // }
            move_uploaded_file($file_tmp, "assets/img/projects/".$file_name);
        }else {
            print_r($errors);
            die();
        }
    }


    $pname = mysqli_real_escape_string($conn, $_POST['pname']);
    $ptitle = mysqli_real_escape_string($conn, $_POST['ptitle']);
    $plink = mysqli_real_escape_string($conn, $_POST['plink']);
    $pclink = mysqli_real_escape_string($conn, $_POST['pclink']);

    $sql = "UPDATE projects set pname = '$pname', ptitle= '$ptitle', plink ='$plink', pclink = '$pclink',  pimg = '$file_name' where id = $project_id";

    if (mysqli_multi_query($conn, $sql)) {
        $msg = "<p style='color: green; text-align:center; margin: 10px 0;'>Successfully Updated the Project</p>";
        // header("Location: {$hostname}/admin/personaldetailslist.php");
    } else {
         $msg = "<p style='color: red; text-align:center; margin: 10px 0;'>Can't updated the Project</p>";
    }


    }
      

    }

?>

<div class="container mr-5">

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Your Project</h3></div>
                <div class="card-body">

                        <?php if(isset($msg)) echo $msg ?>
                    
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">  

                        <?php

                            // include 'config.php';

                            $project_id = $_GET['id'];
                            
                            $sql = "SELECT * FROM projects where id = {$project_id}";

                                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Project Name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Project name" name="pname" value="<?php echo $row['pname']; ?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Project Title</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Project Title" name="ptitle" value="<?php echo $row['ptitle']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Project Live Link</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Project Live Link" name="plink" value="<?php echo $row['plink']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Project code Link</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Project code Link" name="pclink" value="<?php echo $row['pclink']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1 form-label d-block" for="inputEmailAddress">Projects Image</label>
                                    <input style="border:2px dotted green;" class="px-3 py-3" type="file" id="formFile" name="pimg">
                                    <input style="border:2px dotted green;" class="px-3 py-3" type="text" id="formFile" name="oldpic" value="<?php echo $row['pimg']; ?>" hidden>
                                    <img class="mt-4" src="assets/img/projects/<?php echo $row['pimg']; ?>" height="150px" width="150px" alt="">
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
