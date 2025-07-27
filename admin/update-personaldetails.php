<?php
include "header.php"; 

    if (isset($_GET['id'])) {

        // include 'config.php';

        $personal_id = $_GET['id'];
            
        // $sql2 = "SELECT * FROM post
        //     where id = {$personal_id}";

        //     $result2 = mysqli_query($conn, $sql2) or die("Query Unsuccessful");

        // $row2 = mysqli_fetch_assoc($result2);

    if (isset($_POST['update'])) {
    include 'config.php';

    if (empty($_FILES['pic']['name'])) {
        $picfile_name = $_POST['oldpic'];
    }
    
    else {
        $errors = array();
        $picfile_name = "updated_".date("Y_m_d_h_i_sa").$_FILES['pic']['name'];
        $file_size = $_FILES['pic']['size'];
        $file_tmp = $_FILES['pic']['tmp_name'];
        $file_type = $_FILES['pic']['type'];
        $file_ext1 = explode('.', $picfile_name);
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
            $path = "assets/img/ppic/$oldpic";
            unlink($path);
            // if ($post_id == $_GET['id']) {
            //     unlink($path);
            // }
            move_uploaded_file($file_tmp, "assets/img/ppic/".$picfile_name);
        }else {
            print_r($errors);
            die();
        }
    }

    if (empty($_FILES['cv']['name'])) {
        $cvfile_name = $_POST['oldcv'];
    }else {
        $errors = array();
        $cvfile_name = "update_".date("Y_m_d_h_i_sa").$_FILES['cv']['name'];
        $file_size = $_FILES['cv']['size'];
        $file_tmp = $_FILES['cv']['tmp_name'];
        $file_type = $_FILES['cv']['type'];
        $file_ext1 =explode('.', $cvfile_name);
        $file_ext = strtolower(end($file_ext1));
        // $file_ext = strtolower(end(explode('.', $cvfile_name)));
        $extension = array("doc", "docx", "ppt", "pptx", "pdf", "jpeg", "jpg", "png");

        if (in_array($file_ext, $extension) === false) {
            $errors[] = "This extension file not allowed, Please choose a docx, pptx, pdf, JPG or PNG file.";
        }

        if ($file_size > 10485760) {
            $errors[] = "File size must be 10mb or lower.";
        }

        if (empty($errors) == true) {
            $oldcv = $_REQUEST['oldcv'];
            $path = "assets/img/cv/$oldcv";
            unlink($path);
            move_uploaded_file($file_tmp, "assets/img/cv/".$cvfile_name);
        }else {
            print_r($errors);
            die();
        }   
    }

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $desig1 = mysqli_real_escape_string($conn, $_POST['desig1']);
    $desig2 = mysqli_real_escape_string($conn, $_POST['desig2']);
    $pnum1 = mysqli_real_escape_string($conn, $_POST['pnum1']);
    $pnum2 = mysqli_real_escape_string($conn, $_POST['pnum2']);
    $fblink = mysqli_real_escape_string($conn, $_POST['fblink']);
    $instalink = mysqli_real_escape_string($conn, $_POST['instalink']);
    $githublink = mysqli_real_escape_string($conn, $_POST['githublink']);
    $linkedinlink = mysqli_real_escape_string($conn, $_POST['linkedinlink']);
    $twitterlink = mysqli_real_escape_string($conn, $_POST['twitterlink']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "UPDATE personaldetails set fname= '$fname', lname= '$lname', desig1 ='$desig1', desig2 = '$desig2', pnum1 = '$pnum1', pnum2 = '$pnum2', fblink = '$fblink', instalink = '$instalink', githublink = '$githublink', linkedinlink = '$linkedinlink', twitterlink = '$twitterlink', email = '$email', cv = '$cvfile_name', pic = '$picfile_name' where id = $personal_id";

    if (mysqli_multi_query($conn, $sql)) {
        // header("Location: {$hostname}/admin/personaldetailslist.php");
    } else {
        echo"<div class='alert alert-danger'>Query Failed, Not Updated</div>";
    }


    }
      

    }

   


//    $sql = "UPDATE personaldetails set title='{$_POST['post_title']}', description='{$_POST['postdesc']}', category={$_POST['category']}, post_img='{$picfile_name}'
//     WHERE post_id = {$_POST["post_id"]};";

//     if ($_POST['old_category'] != $_POST['category']) {
//         $sql .= "UPDATE category set post = post - 1 where category_id = {$_POST['old_category']};";
//         $sql .= "UPDATE category set post = post + 1 where category_id = {$_POST['category']};";
//     }

    

//     $result = mysqli_multi_query($conn, $sql) or die("Query Unsuccessful");

//     if ($result) {
//         header("Location: {$hostname}/admin/post.php");
//     }

?>

<div class="container mr-5">

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Your Personal Details</h3></div>
                <div class="card-body">

                        
                    
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">  

                        <?php

                            // include 'config.php';

                            $personal_id = $_GET['id'];
                            
                            $sql = "SELECT * FROM personaldetails where id = {$personal_id}";

                                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">First Name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" name="fname" value="<?php echo $row['fname']; ?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Last Name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter last name" name="lname" value="<?php echo $row['lname']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Designation 1</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first designation name" name="desig1" value="<?php echo $row['desig1']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Designation 2</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter second designation" name="desig2" value="<?php echo $row['desig2']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Phone Number 1</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter first phone number" name="pnum1" value="<?php echo $row['pnum1']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Phone Number 2</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter second phone number" name="pnum2" value="<?php echo $row['pnum2']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Facebook Link</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter Facebook Link" name="fblink" value="<?php echo $row['fblink']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Instagram Link<Link:touch></Link:touch> Link</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter Instagram Link" name="instalink" value="<?php echo $row['instalink']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Github Link</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter Github Link" name="githublink" value="<?php echo $row['githublink']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Linkedin Link</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter Linkedin Link" name="linkedinlink" value="<?php echo $row['linkedinlink']; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Twitter Link</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter Twitter Link" name="twitterlink" value="<?php echo $row['twitterlink']; ?>"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" value="<?php echo $row['email']; ?>"/>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="small mb-1 form-label d-block" for="inputEmailAddress">CV</label>
                                    <input style="border:2px dashed blue;" class="px-3 py-3" type="file" id="formFile" name="cv">
                                    <input style="border:2px dashed blue;" class="px-3 py-3" type="text" id="formFile" name="oldcv" value="<?php echo $row['cv']; ?>" hidden>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1 form-label d-block" for="inputEmailAddress">Image</label>
                                    <input style="border:2px dotted green;" class="px-3 py-3" type="file" id="formFile" name="pic">
                                    <input style="border:2px dotted green;" class="px-3 py-3" type="text" id="formFile" name="oldpic" value="<?php echo $row['pic']; ?>" hidden>
                                    <img class="mt-4" src="assets/img/ppic/<?php echo $row['pic']; ?>" height="150px" width="150px" alt="">
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
