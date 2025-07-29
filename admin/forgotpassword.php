<?php

    include 'config.php';
    session_start();
    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $rand = rand(000000,999999);
        $sql = "SELECT * FROM admin_login";
        $query = mysqli_query($conn, $sql) or die("Query Failed");
        if (mysqli_num_rows($query) > 0) {
            $row = mysqli_fetch_assoc($query);
            $adminEmail = $row['email'];
            if ($email == $adminEmail) {
                $to = $email;
                $subject = "Verification Code";
                $body = "Hi \n This is your verification code: $rand";
                $header = "From: obujemran240@gmail.com";
                if (mail($to, $subject, $body, $header)) {
                    $_SESSION['OTP'] = $rand;
                    header("location:otp.php");
                } else {
                $msg = '<div class=" text-center alert alert-danger">Email are Not Send</div>';
            }
                
            } else {
                $msg = '<div class=" text-center alert alert-danger">Email are Not Match</div>';
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Page Title - PW Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 mb-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="justify-content-center d-flex mt-4"><img class="card-img-top" style="height:150px ; width: 150px"  src="assets/img/normal/passkey.png" alt="" srcset=""></div>
                                    <div class="card-header"><h3 class="text-center font-weight-light my-2">Password Recovery</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Enter your email address and we will send you a OTP to reset your password.</div>
                                        <?php if (isset($msg)) {
                                            echo $msg;
                                        } ?>
                                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                                        <!-- <form action="<?php  ?>" method="POST"> -->
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" name="email" />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="login.php">Return to login</a>
                                                <input type="submit" name="submit" value="Reset Password" class="btn btn-primary"/>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center">
                                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div class="text-muted">Copyright <span class="text-info">EMRAN</span> &copy; Your Website 2025</div>
                            <!-- <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
