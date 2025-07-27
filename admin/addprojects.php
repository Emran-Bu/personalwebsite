
<?php 

include "header.php";

if (isset($_POST['submit'])) {
    include 'config.php';

    if (isset($_FILES['pimg'])) {
    $errors = array();
    $file_name = date("Y_m_d_h_i_sa").$_FILES['pimg']['name'];
    $file_size = $_FILES['pimg']['size'];
    $file_tmp = $_FILES['pimg']['tmp_name'];
    $file_type = $_FILES['pimg']['type'];
    $file_ext1 = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext1));
    $extension = array("jpeg", "jpg", "png");

    if (in_array($file_ext, $extension) === false) {
        $errors[] = "This extension file not allowed, Please choose a JPG or PNG file.";
    }

    if ($file_size > 10485760) {
        $errors[] = "File size must be 10mb or lower.";
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "assets/img/projects/".$file_name);
    }else {
        print_r($errors);
        die();
    }
}


// session_start();

$pname = mysqli_real_escape_string($conn, $_POST['pname']);
$ptitle = mysqli_real_escape_string($conn, $_POST['ptitle']);
$plink = mysqli_real_escape_string($conn, $_POST['plink']);
$pclink = mysqli_real_escape_string($conn, $_POST['pclink']);

$sql = "INSERT INTO projects (pname, ptitle, plink, pclink, pimg) values ('{$pname}', '{$ptitle}', '{$plink}', '{$pclink}', '{$file_name}')";

if (mysqli_multi_query($conn, $sql)) {
    $msg = '<div class=" text-center alert alert-success">Successfully Added Your Projects</div>';
    // header("location: {$hostname}/admin/personaldetailslist.php");
} else {
    $msg = '<div class=" text-center alert alert-danger">Not Added Your Projects</div>';
}
}
?>


<div class="container mr-5">

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Your projects</h3></div>
                <div class="card-body">
                    <?php if(isset($msg)) echo $msg ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Project Name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Project Name" name="pname"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Project Title</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter project title" name="ptitle"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Project Live Link</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Project Live Link" name="plink"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Project Code Link</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Project Code Link" name="pclink"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1 form-label d-block" for="inputEmailAddress">Project Image</label>
                                    <input style="border:2px dotted green;" class="px-3 py-3" type="file" id="formFile" name="pimg">
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-4 mb-0"><input type="submit" class="btn btn-primary btn-block" name="submit"></div>
                    
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>

<?php include "footer.php" ?>
