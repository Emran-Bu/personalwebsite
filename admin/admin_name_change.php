<?php
include "header.php"; 

    if (isset($_GET['id'])) {

        $cn_id = $_GET['id'];

        if (isset($_POST['confirm'])) {
            include 'config.php';

            $name = mysqli_real_escape_string($conn, $_POST['name']);
            // $cemail = mysqli_real_escape_string($conn, $_POST['cemail']);

            // if ($email == $cemail) {
                // echo $password . "<br>" . $confirmpassword;
                // die();
                $sql = "UPDATE admin_login set name = '$name' where id = $cn_id";

                if (mysqli_query($conn, $sql)) {
                    $msg = "<p style='color: green; text-align:center; margin: 10px 0;'> Successfully Change Your Name </p>";
                } else {
                    $msg = "<p style='color: red; text-align:center; margin: 10px 0;'> Can't Change Your Name </p>";
                }
            // } else {
            //     $msg = "<div class='alert alert-danger text-center' role='alert'> Can't Match Email! Please try again! </div>";
            // }    
        }
    }

?>

<div class="container mr-5">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class=" my-4 text-center"><i class="fas fa-user display-1"></i></div>
                <div class="card-header"><h3 class="text-center font-weight-light my-2">Change Name</h3></div>
                <div class="card-body">
                        
                    <?php if(isset($msg)) echo $msg ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Enter Your New Email</label>
                                    <input class="form-control py-2" id="inputFirstName" type="text" placeholder="Enter Your New Name" name="name" required/>
                                </div>
                            </div>
                            <!-- <div hidden class="col-md-12">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Confirm Email</label>
                                    <input class="form-control py-2" id="inputFirstName" type="email" placeholder="Again Enter Your New Email" name="cemail" required/>
                                </div>
                            </div> -->
                        </div>

                        <div class="form-group mt-2 mb-0"><input value="Change" type="submit" class="btn btn-primary btn-block" name="confirm"></div>
                    
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>

<?php include "footer.php"; ?>
