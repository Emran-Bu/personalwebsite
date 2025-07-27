<?php
include "header.php"; 

if (isset($_GET['id'])) {

    $ex_id = $_GET['id'];
    
    if (isset($_POST['submit'])) {
    include 'config.php';
    $ename = mysqli_real_escape_string($conn, $_POST['ename']);
    $enumber = mysqli_real_escape_string($conn, $_POST['enumber']);
    $epercentage = mysqli_real_escape_string($conn, $_POST['epercentage']);

    $sql = "UPDATE experience set ename= '$ename', epercentage= '$epercentage' where id = $ex_id";

        if (mysqli_query($conn, $sql)) {
            $msg = '<div class=" text-center alert alert-success">Successfully Updated Your Experience</div>';
            // header("location: {$hostname}/admin/personaldetailslist.php");
        } else {
            $msg = '<div class=" text-center alert alert-danger">Not Updated Your Experience</div>';
        }
    }
}

?>

<div class="container mr-5">

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Your Experience</h3></div>
                <div class="card-body">
                    <?php if(isset($msg)) echo $msg ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">

                            <?php
                            $ex_id = $_GET['id'];
                            
                            $sql = "SELECT * FROM experience where id = {$ex_id}";

                                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {

                            ?>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Experience Title</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Experience" name="ename" value="<?php echo $row['ename']; ?>"  />
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Percentage Number</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter percentage" name="epercentage" value="<?php echo $row['epercentage']; ?>"/>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName" hidden>Number</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter Number" name="enumber"  hidden/>
                                </div>
                            </div>
                            <?php  }} ?>
                        </div>

                        <div class="form-group mt-4 mb-0"><input type="Submit" class="btn btn-primary btn-block" name="submit"></div>
                    
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>


<?php include "footer.php"; ?>