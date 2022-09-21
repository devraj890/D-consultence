<?php
include "../connection/connect.php";

session_start();
$user = $_SESSION['username'];
if ($user == true) {
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
    <link rel="stylesheet" href="admin_style.css">

</head>

<body>

    <!--header open-->
    <!-- <header class="a-header fixed-top">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="a-logo">
                        <a href="">
                            <img class="img-responsive" src="../image/logo.png" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="a-title">
                        <a href="">
                            Admin Dashboard
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="a-log">
                        <a class="btn btn-primary ml-4" href="admin_logout.php" role="button">
                            Log-out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header> -->
    <!--header close-->

    <!--sidebar open-->
    <!-- <aside class="mt-5">
        <ul>
            <li><a href="admin_dashboard.php" class="active">Dashboard</a></li>
            <li><a href="View_contact.php">View_Contact</a></li>
            <li><a href="view_enroll.php">View_Enroll</a></li>
        </ul>
    </aside> -->
    <!--sidebar close-->

    <!-- <section class="view-contact-m mt-5 pt-5 my-5">
        <div class="container float-right">
            <div class="row">
                <div class="col-md-12">
                    <div class="a-head">
                        <h1>Welcome Admin</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <div class="a-full">
                        <img class="img-responsive" src="../image/logo.PNG" alt="logo">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6">
                    <div class="a-sec-abt">
                        <h4>D CONSULTINGIN</h4>
                        <p>D Consultingin is a registered educational consultancy based in Ethiopia working to promote international education and help students to join the best Universities and colleges in the world and work for abroad.

                            The purpose of our effort is to encourage students to fulfill their educational ambitions in several disciplines by guiding them to select internationally recognized universities and colleges. With our consultancy students can join some of the best universities and colleges in USA, Canada, Poland and Italy.

                            We are aware that the choice of the students to study overseas is a valuable decision of their life since it opens career prospects and opportunities to experience new society, culture and life styles. The experienced teams of our staff are devoted to provide the student a friendly, cooperative, and efficient service which helps the students to have complete process easily.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->



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
            <li class="nav-item active">
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
            <li class="nav-item">
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
                        <h1>Welcome Admin</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator pt-0 pb-0"></div>
        <div class="row text-white">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <section class="view-contact-m">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <div class="a-full">
                                    <img class="img-responsive" src="../image/logo.PNG" alt="logo">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-6">
                                <div class="a-sec-abt">
                                    <h4>D CONSULTING</h4>
                                    <p>D Consulting is a registered educational consultancy based in Ethiopia working to promote international education and help students to join the best Universities and colleges in the world and work for abroad.

                                        The purpose of our effort is to encourage students to fulfill their educational ambitions in several disciplines by guiding them to select internationally recognized universities and colleges. With our consultancy students can join some of the best universities and colleges in USA, Canada, Poland and Italy.

                                        We are aware that the choice of the students to study overseas is a valuable decision of their life since it opens career prospects and opportunities to experience new society, culture and life styles. The experienced teams of our staff are devoted to provide the student a friendly, cooperative, and efficient service which helps the students to have complete process easily.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
    <script src="sidebar.js"></script>

</body>

</html>