
<?php 

include "header.php";

if (isset($_POST['submit'])) {
    include 'config.php';

    if (isset($_FILES['serviceimg'])) {
    $errors = array();
    $file_name = date("Y_m_d_h_i_sa").$_FILES['serviceimg']['name'];
    $file_size = $_FILES['serviceimg']['size'];
    $file_tmp = $_FILES['serviceimg']['tmp_name'];
    $file_type = $_FILES['serviceimg']['type'];
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
        move_uploaded_file($file_tmp, "assets/img/services/".$file_name);
    }else {
        print_r($errors);
        die();
    }
}


// session_start();

$servicename = mysqli_real_escape_string($conn, $_POST['servicename']);
$servicetitle1 = mysqli_real_escape_string($conn, $_POST['servicetitle1']);
$servicetitle2 = mysqli_real_escape_string($conn, $_POST['servicetitle2']);
$servicetitle3 = mysqli_real_escape_string($conn, $_POST['servicetitle3']);
$servicetitle4 = mysqli_real_escape_string($conn, $_POST['servicetitle4']);
$servicetitle5 = mysqli_real_escape_string($conn, $_POST['servicetitle5']);
$servicetitle6 = mysqli_real_escape_string($conn, $_POST['servicetitle6']);

$sql = "INSERT INTO services (servicename, servicetitle1, servicetitle2, servicetitle3, servicetitle4, servicetitle5, servicetitle6, serviceimg)
values('{$servicename}', '{$servicetitle1}', '{$servicetitle2}', '{$servicetitle3}', '{$servicetitle4}', '{$servicetitle5}', '{$servicetitle6}', '{$file_name}');";

if (mysqli_multi_query($conn, $sql)) {
    $msg = '<div class=" text-center alert alert-success">Successfully Added Your services</div>';
    // header("location: {$hostname}/admin/personaldetailslist.php");
} else {
    $msg = '<div class=" text-center alert alert-danger">Not Added Your services</div>';
}

}

?>


<div class="container mr-5">

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Your Personal Details</h3></div>
                <div class="card-body">
                    <?php if(isset($msg)) echo $msg ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Service Name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Service Name" name="servicename"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Service title 1</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Service title 1" name="servicetitle1"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Service Title 2</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter service title 2" name="servicetitle2"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Service Title 3</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter service title 3" name="servicetitle3"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Service Title 4</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter service title 4" name="servicetitle4"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Service Title 5</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter Service Title 5" name="servicetitle5"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputLastName">Service Title 6</label>
                                    <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter service title 6" name="servicetitle6"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1 form-label d-block" for="inputEmailAddress">Image</label>
                                    <input style="border:2px dotted green;" class="px-3 py-3" type="file" id="formFile" name="serviceimg">
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
