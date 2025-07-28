<?php
include "header.php"; 

    if (isset($_GET['id'])) {

        $cp_id = $_GET['id'];

        if (isset($_POST['confirm'])) {
            include 'config.php';

            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);

            if ($password == $confirmpassword) {
                // echo $password . "<br>" . $confirmpassword;
                // die();
                $sql = "UPDATE admin_login set password = '$password' where id = $cp_id";

                if (mysqli_query($conn, $sql)) {
                    $msg = "<p style='color: green; text-align:center; margin: 10px 0;'> Successfully Change Password </p>";
                } else {
                    $msg = "<p style='color: red; text-align:center; margin: 10px 0;'> Can't Change Password </p>";
                }
            } else {
                $msg = "<div class='alert alert-danger' role='alert'> Can't Match Password! Please try again! </div>";
            }    
        }
    }

?>

<div class="container mr-5">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class=" my-4 text-center"><i class="fas fa-lock display-1"></i></div>
                <div class="card-header"><h3 class="text-center font-weight-light my-2">Change Password</h3></div>
                <div class="card-body">
                        
                    <?php if(isset($msg)) echo $msg ?>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                        <div class="form-row">  
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Enter Your New Password</label>
                                    <input class="form-control py-2" id="inputFirstName" type="text" placeholder="Enter Your New Password" name="password" required/>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="small mb-1" for="inputFirstName">Confirm Password</label>
                                    <input class="form-control py-2" id="inputFirstName" type="text" placeholder="Again Enter Your New Password" name="confirmpassword" required/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group mt-2 mb-0"><input value="Confirm" type="submit" class="btn btn-primary btn-block" name="confirm"></div>
                    
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>

<?php include "footer.php"; ?>
