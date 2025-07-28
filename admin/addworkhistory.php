<?php
include "header.php"; 

if (isset($_POST['submit'])) {
    include 'config.php';
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);

    $sql = "INSERT INTO workhistory (title, number) values ('{$title}', '{$number}')";

    if (mysqli_query($conn, $sql)) {
        $msg = '<div class=" text-center alert alert-success">Successfully Added Your History</div>';
        // header("location: {$hostname}/admin/personaldetailslist.php");
    } else {
        $msg = '<div class=" text-center alert alert-danger">Not Added Your History</div>';
    }
}
?>

<div class="container mr-5">

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Your Work</h3></div>
                <div class="card-body">
                    <?php if(isset($msg)) echo $msg ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Title</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter title" name="title"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Number</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Number" name="number"/>
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


<?php include "footer.php"; ?>