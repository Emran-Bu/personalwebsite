
<?php 

include "header.php";

if (isset($_POST['submit'])) {
    include 'config.php';

    if (isset($_FILES['pic'])) {
    $errors = array();
    $picfile_name = date("Y_m_d_h_i_sa").$_FILES['pic']['name'];
    // $picfile_name = date("Y_m_d_h_i_sa").$_FILES['pic']['name'];
    // $file_name = mt_rand().$_FILES['pic']['name'];
    $file_size = $_FILES['pic']['size'];
    $file_tmp = $_FILES['pic']['tmp_name'];
    $file_type = $_FILES['pic']['type'];
    $file_ext = strtolower(end(explode('.', $picfile_name)));
    $extension = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extension) === false) {
        $errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
    }

    if ($file_size > 10485760) {
        $errors[] = "File size must be 10mb or lower.";
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "assets/img/ppic/".$picfile_name);
    }else {
        print_r($errors);
        die();
    }
}

if (isset($_FILES['cv'])) {
    $errors = array();
    $cvfile_name = date("Y_m_d_h_i_sa").$_FILES['cv']['name'];
    // $file_name = mt_rand().$_FILES['cv']['name'];
    $file_size = $_FILES['cv']['size'];
    $file_tmp = $_FILES['cv']['tmp_name'];
    $file_type = $_FILES['cv']['type'];
    $file_ext = strtolower(end(explode('.', $cvfile_name)));
    $extension = array("doc", "docx", "ppt", "pptx", "pdf", "jpeg", "jpg", "png");

    if (in_array($file_ext, $extension) === false) {
        $errors[] = "This extension file not allowed, Please choose a docx, pptx, pdf, JPG or PNG file.";
    }

    if ($file_size > 10485760) {
        $errors[] = "File size must be 10mb or lower.";
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "assets/img/cv/".$cvfile_name);
    }else {
        print_r($errors);
        die();
    }
}

// session_start();

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
// $date = date("d M, Y");
// $author = $_SESSION['user_id'];

$sql = "INSERT INTO personaldetails(fname, lname, desig1, desig2, pnum1, pnum2, fblink, instalink, githublink, linkedinlink, twitterlink, email, cv, pic)
values('{$fname}', '{$lname}', '{$desig1}', '{$desig2}', '{$pnum1}', '{$pnum2}', '{$fblink}', '{$instalink}', '{$githublink}', '{$linkedinlink}', '{$twitterlink}', '{$email}', '{$cvfile_name}', '{$picfile_name}');";

if (mysqli_multi_query($conn, $sql)) {
    header("location: {$hostname}/admin/personaldetailslist.php");
} else {
    echo"<div class='alert alert-danger'>Query Failed</div>";
}

// if(isset($_POST['save'])){
//     echo"sve";
    
// }

}

?>


<div class="container mr-5">

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Your Personal Details</h3></div>
                <div class="card-body">
                    
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">First Name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" name="fname"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Last Name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter last name" name="lname"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Designation 1</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first designation name" name="desig1"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Designation 2</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter second designation" name="desig2"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Phone Number 1</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter first phone number" name="pnum1"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Phone Number 2</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter second phone number" name="pnum2"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Facebook Link</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter Facebook Link" name="fblink"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Instagram Link<Link:touch></Link:touch> Link</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter Instagram Link" name="instalink"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Github Link</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter Github Link" name="githublink"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Linkedin Link</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter Linkedin Link" name="linkedinlink"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Twitter Link</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter Twitter Link" name="twitterlink"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                    <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email"/>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="small mb-1 form-label d-block" for="inputEmailAddress">Resume</label>
                                    <input style="border:2px dashed blue;" class="px-3 py-3" type="file" id="formFile" name="cv">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1 form-label d-block" for="inputEmailAddress">Image</label>
                                    <input style="border:2px dotted green;" class="px-3 py-3" type="file" id="formFile" name="pic">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-4 mb-0"><input type="Submit" class="btn btn-primary btn-block" name="submit"></div>
                    
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>

<?php include "footer.php" ?>
