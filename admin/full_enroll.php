<?php
include "../connection/connect.php";

session_start();

$user = $_SESSION['username'];

if ($user == true) {
    $query = "select * from tb_enroll";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);
    $count = count($row);

    $dob = $row['Date_of_Birth'];
    $timestamp = strtotime($dob);
    $Date_of_birth = date("d-m-Y", $timestamp);
} else {
    header('location:admin_login.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="../css/all.min.css">
    <!--link for font awesome 6.1..-->
    <!--link for bootstrap 4..-->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="admin_style.css">

</head>

<body>


    <!-- Vertical navbar -->
    <div class="vertical-nav bg-white" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
            <div class="media d-flex align-items-center">
                <img loading="lazy" src="../image/logo.png" alt="..." width="120" height="120" class="mr-3 rounded-square img-thumbnail shadow-sm">
                <div class="media-body">
                    <h4 class="m-0">Admin</h4>
                </div>
            </div>
        </div>

        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="admin_dashboard.php" class="nav-link text-dark bg-light">
                    <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="View_contact.php" class="nav-link text-dark">
                    <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                    view_contact
                </a>
            </li>
            <li class="nav-item active">
                <a href="view_enroll.php" class="nav-link text-dark">
                    <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                    view_enroll
                </a>
            </li>
            <li class="nav-item mt-3">
                <a class="btn btn-primary ml-4" href="admin_logout.php" role="button">
                    Log-out
                </a>
            </li>
        </ul>
    </div>
    <!-- End vertical navbar -->



    <!-- Page content holder -->
    <div class="page-content p-5" id="content">
        <!-- Toggle button -->
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>

        <!-- Demo content -->

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="a-head">
                        <h1>Enroll Details</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator pt-0 pb-0"></div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <!--section open for enroll-->
                <section class="enrol-sec">
                    <div class="container">
                        <a href="view_enroll.php" class="btn btn-primary ml-3">Back</a>
                        <div class="row mt-4 mb-4 ml-1 mr-1">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>First Name:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['First_Name']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Last Name:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['Last_Name']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-4 ml-1 mr-1">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Gendar:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['Gendar']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Date of Birth:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $Date_of_birth ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-4 ml-1 mr-1">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Father Name:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['Father_Name']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Mother Name:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['Mother_Name']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-4 ml-1 mr-1">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Phone:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['Phone']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Email:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['Email']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-4 ml-1 mr-1">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Local Address:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['Local_Address']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Parmanent Address:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['Parmanent_Address']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-4 ml-1 mr-1">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Highest Education:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['Highest_Education']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Marksheet:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p><img src="../db_photos/<?php echo $row['Marksheet']; ?>" width="100" height="100"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-4 ml-1 mr-1">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Aadhar No:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['Aadhar_No']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Aadhar:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <img src="../db_photos/<?php echo $row['aadhar']; ?>" width="100" height="100"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" row mt-4 mb-4 ml-1 mr-1">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Pan No:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['Pan_No']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>pan-card:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p><img src="../db_photos/<?php echo $row['pan']; ?>" width="100" height="100"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" row mt-4 mb-4 ml-1 mr-1">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Passport_No:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['Passport_No']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>passport:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <img src="../db_photos/<?php echo $row['passport']; ?>" width="100" height="100"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" row mt-4 mb-4 ml-1 mr-1">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Study Program:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['Study_Program']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Country:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['Country']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4 mb-4 ml-1 mr-1">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>University:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['University']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <h5>Course:</h5>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-sm-12">
                                        <p> <?php echo $row['Course']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--section close-->
            </div>
        </div>
    </div>




    <!--all bs Scripts-->

    <script src="../js/jquery.min.js"></script>
    <!--link for jquery..-->
    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <!--link for bootstrap 4 js..-->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/popper-utils.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/all.min.js"></script>
    <!--link for font awesome 6.1..-->
    <!--link for datatable jquery..-->
    <script src="sidebar.js"></script>


</body>

</html>