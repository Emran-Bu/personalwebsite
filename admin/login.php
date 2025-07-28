<?php

    include 'config.php';
    session_start();
    if (isset($_SESSION["email"])) {
        header("Location: {$hostname}/admin/index.php");
    }

    if(isset($_COOKIE['email']) && isset($_COOKIE['password']))
        {
            $cookie_email = $_COOKIE['email'];
            $cookie_password = $_COOKIE['password'];
        }
    else{
        $cookie_email = "";
        $cookie_password = "";
    }

    $msg = "";
    if (isset($_POST['login'])) {

    // include 'config.php';

//    if ($_POST['username'] == "") {
//        $usererror = 1;
//    } else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        $password = $_POST['password'];
        // $password = md5($_POST['password']);

        $sql = "SELECT id, email , password FROM admin_login where email = '{$email}' AND password = '{$password}'";

        $result = mysqli_query($conn, $sql) or die("Query Failed");

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // session_start();
                $_SESSION['email'] = $row['email'];
                $_SESSION['user_id'] = $row['id'];
                // $_SESSION['user_role'] = $row['role'];

                if(isset($_POST['remember']))
                    {
                        setcookie('email', $_POST['email'], time() + (60*60*24));
                        setcookie('password', $_POST['password'], time() + (60*60*24));
                    }
                else{
                    setcookie('email', '', time() - (60*60*24));
                    setcookie('password', '', time() - (60*60*24));
                }

                header("Location: {$hostname}/admin/index.php");
            }
        } else {
             $msg = '<div class=" text-center alert alert-danger">Username And Password are Not Match</div>';
            // $error = 1;
        }
//    }
    
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
        <title>Page Title - SB Admin</title>
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
                                    <div class="justify-content-center d-flex mt-4"><img class="card-img-top" style="height:150px ; width: 150px"  src="assets/img/normal/user.png" alt="" srcset=""></div>
                                    <div class="card-header"><h3 class="text-center font-weight-light my-2">Login</h3></div>
                                    <div class="card-body">
                                        <?php echo $msg ?>
                                        <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" autocomplete="off">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" name="email" placeholder="Enter email address" value="<?= $cookie_email ?> " autocomplete="off"  required/>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>

                                                <div style="position: relative; display:flex;">
                                                <input  class="form-control py-4" id="inputPassword" type="password" name="password" placeholder="Enter password" value="<?= $cookie_password ?>" required/>
                                                <i id="eye" style="    position: absolute;
                                                    top: 50%;
                                                    right: 10px;
                                                    transform: translateY(-50%);
                                                    cursor: pointer;
                                                    font-size: 1.5rem;
                                                ;" class="fa fa-eye"></i>
                                                <!-- fa fa-eye-slash -->
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" name="remember"/>
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="forgotpassword.php">Forgot Password?</a>
                                                <!-- <a class="btn btn-primary" href="index.html">Login</a> -->
                                                 <input type="submit" class="btn btn-primary" name="login">
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
            <!-- footer part start-->
            <div id="layoutAuthentication_footer">
                <footer class="py-2 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div class="text-muted">Copyright <span class="text-info">EMRAN</span> &copy; Personal Website 2025</div>
                            <!-- <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div> -->
                        </div>
                    </div>
                </footer>
            </div>
            <!-- footer part End-->
        </div>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<script>
            $(document).ready(function(){
                const password = $('#inputPassword');
                $('#eye').click(function(){
                    // console.log('dfdsfds');
                    if (password.prop('type') == 'password') {
                        $(this).css("color", "red");
                        password.attr('type', 'text');
                        
                        
                    } else {
                        $(this).css("color", "black");
                        password.attr('type', 'password');
                        
                    }
                })
                // $('#eye').click(function(){
                //     if (password.prop('type') == 'password') {
                //         $(this).addClass('fa-eye-slash');
                //         password.attr('type', 'text');
                //     } 
                //     else {
                //         console.log('hhh')
                //         // $(this).removeClass('fa-eye-slash');
                //         password.attr('type', 'password');
                //     }
                // })
            })
        </script>

        <script src="js/scripts.js"></script>
        
    </body>
</html>
