<?php
include "header.php"; 

    if (isset($_GET['id'])) {

        $work_id = $_GET['id'];

        if (isset($_POST['update'])) {
        include 'config.php';

            $title = mysqli_real_escape_string($conn, $_POST['title']);
            $number = mysqli_real_escape_string($conn, $_POST['number']);

            $sql = "UPDATE workhistory set title= '$title', number= '$number' where id = $work_id";

            if (mysqli_query($conn, $sql)) {
                 $msg = "<p style='color: green; text-align:center; margin: 10px 0;'>Successfully Updated the work History</p>";
                // header("Location: {$hostname}/admin/workhistorylist.php");
            } else {
                 $msg = "<p style='color: red; text-align:center; margin: 10px 0;'>Can't updated the work History</p>";
            }

        }
      
    }


?>

<div class="container mr-5">

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Your Personal Details</h3></div>
                <div class="card-body">
                        
                    <?php if(isset($msg)) echo $msg ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">  

                        <?php

                            $work_id = $_GET['id'];
                            
                            $sql = "SELECT * FROM workhistory where id = {$work_id}";

                                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">First Name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter title" name="title" value="<?php echo $row['title']; ?>" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Last Name</label>
                                    <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter number" name="number" value="<?php echo $row['number']; ?>"/>
                                </div>
                            </div>
                          <?php  }} ?>
                        </div>

                        <div class="form-group mt-4 mb-0"><input value="Update" type="submit" class="btn btn-primary btn-block" name="update"></div>
                    
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>



<?php include "footer.php"; ?>
