
<?php

    include 'config.php';
    session_start();
    if (!isset($_SESSION["email"])) {
        header("Location: {$hostname}/admin/login.php");
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
        <title>Dashboard - PW Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
         <!-- end header sidebar -->
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Personal Website</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <!-- <a class="dropdown-item" href="#">Settings</a> -->
                        <!-- <a class="dropdown-item" href="#">Activity Log</a> -->
                        <!-- <div class="dropdown-divider"></div> -->
                         <?php
                                $sql = "SELECT * FROM admin_login";
                                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                                mysqli_num_rows($result);
                                $row = mysqli_fetch_assoc($result);
                         ?>
                        <h6 class="text-center text-info border-bottom border-primary"><?php echo $row['name']; ?></h6>
                        <a title="Logout Now?" class="dropdown-item mt-2" href="logout.php"><i class='fas fa-sign-out-alt'></i> Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            <a class="nav-link mt-4" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                            
                            <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Add Information
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="personaldetails.php">Add Personal Details</a>
                                    <a class="nav-link" href="addworkhistory.php">Add Work history</a>
                                    <a class="nav-link" href="addservices.php">Add Services</a>
                                    <a class="nav-link" href="addprojects.php">Add Projects</a>
                                    <a class="nav-link" href="addexperience.php">Add Experience</a>
                                    <a class="nav-link" href="addeducation.php">Add Education</a>
                                </nav>
                            </div> -->

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#addpersonaldetails" aria-expanded="false" aria-controls="addpersonaldetails">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-alt"></i></div>
                                Personal Details
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="addpersonaldetails" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="personaldetails.php">Add Personal Details</a>
                                    <a class="nav-link" href="personaldetailslist.php">View Personal Details</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#AddWorkhistory" aria-expanded="false" aria-controls="AddWorkhistory">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Work history
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="AddWorkhistory" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="addworkhistory.php">Add Work history</a>
                                    <a class="nav-link" href="workhistorylist.php">View Work History</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#AddServices" aria-expanded="false" aria-controls="AddServices">
                                <div class="sb-nav-link-icon"><i class="fas fa-bullhorn"></i></div>
                                Services
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="AddServices" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="addservices.php">Add Services</a>
                                    <a class="nav-link" href="serviceslist.php">View Services</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#AddProjects" aria-expanded="false" aria-controls="AddProjects">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                                Projects
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="AddProjects" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="addprojects.php">Add Projects</a>
                                    <a class="nav-link" href="projectlist.php">View Projects</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#AddExperience" aria-expanded="false" aria-controls="AddExperience">
                                <div class="sb-nav-link-icon"><i class="fas fa-burn"></i></div>
                                Experience
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="AddExperience" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="addexperience.php">Add Experience</a>
                                    <a class="nav-link" href="experiencelist.php">View Experience</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#AddEducation" aria-expanded="false" aria-controls="AddEducation">
                                <div class="sb-nav-link-icon"><i class="fas fa-graduation-cap"></i></div>
                                Education
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="AddEducation" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="addeducation.php">Add Education</a>
                                    <a class="nav-link" href="educationlist.php">View Education</a>
                                </nav>
                            </div>
	<!-- far fa-sun -->
                            <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                View Information
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="personaldetailslist.php">View Personal Details</a>
                                <a class="nav-link" href="workhistorylist.php">View Work History</a>
                                <a class="nav-link" href="serviceslist.php">View Services</a>
                                <a class="nav-link" href="projectlist.php">View Projects</a>
                                <a class="nav-link" href="experiencelist.php">View Experience</a>
                                <a class="nav-link" href="educationlist.php">View Education</a>
                            </nav>

                            </div> -->

                            <!-- <div class="sb-sidenav-menu-heading">Addons</div> -->
                                <a class="nav-link" href="viewcustomercontact.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-envelope-open"></i></div>
                                    Customer Contact
                                </a>
                                <a class="nav-link" href="profilesettings.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-key"></i></div>
                                    Profile Settings
                                </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <?php
                                // $sql = "SELECT * FROM admin_login";
                                // $result = mysqli_query($conn, $sql) or die("Query Unsuccessful");
                                // mysqli_num_rows($result);
                                // $row = mysqli_fetch_assoc($result);
                         ?>
                        <div class="small">Logged in as:</div>
                        <!-- <?php echo $row['name']; ?> -->
                        <h6 class="text-info"><?php echo $row['name']; ?></h6>
                    </div>
                </nav>
            </div>
            <!-- end header sidebar -->

            <!-- dashboard start -->

            <!-- dashboard end -->
            <div id="layoutSidenav_content">