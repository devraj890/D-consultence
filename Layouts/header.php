<?php
include "connection/connect.php";

//clear session start notice......
error_reporting(E_ALL ^ E_NOTICE);

// session_start();
if (!isset($_SESSION)) {
    session_start();
} 

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>D Consulting</title>

    <link rel="stylesheet" href="css/all.min.css">
    <!--link for font awesome 6.1..-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--link for bootstrap 4..-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
        }

        .c-head {
            background-color: #14214d;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .c-head a {
            text-decoration: none;
            color: #fff;
        }

        .c-nav-bg {
            background-color: #1f3377;
            margin: 0px;
            padding: 0px;
        }

        .nav-logo img {
            width: 140px;
            height: 60px;
        }

        .nav-item a:hover {
            font-size: 20px;
            font-weight: bold;
            text-shadow: 1px 3px 3px rgba(0, 0, 0, 0.671);
        }
    </style>

    <!--all bs Scripts-->
    <script src="js/jquery.min.js"></script>
    <!--link for jquery..-->
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!--link for bootstrap 4 js..-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/popper-utils.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/all.min.js"></script>
    <!--link for font awesome 6.1..-->
</head>

<body>
    <!--header open-->
    <header class="top-header">
        <div class="container-fluid sticky-top">
            <div class="row c-head">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="toolbar-social">
                        <a href="#">
                            <i class="fa-brands fa-facebook fa-lg ml-1 mr-1"></i>
                            <!-- <img src="image/icons/facebook.png" alt="facebook"> -->
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-square-instagram fa-lg ml-1 mr-1"></i>
                            <!-- <img src="image/icons/instagram.png" alt="instagram"> -->
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-linkedin fa-lg ml-1 mr-1"></i>
                            <!-- <img src="image/icons/linkedin.png" alt="linkedin"> -->
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-square-twitter fa-lg ml-1 mr-1"></i>
                            <!-- <img src="image/icons/twitter.png" alt="twitter"> -->
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="toolbar-contact align-center">
                        <a href="mailto:info.dconsult@gmail.com">
                            <i class="fa-solid fa-envelope"></i>
                            <!-- <img src="image/icons/Gmail.png" alt="Gmail"> -->
                            info.dconsult@gmail.com
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="toolbar-contact align-center">
                        <a href="tel:+919786543210 ">
                            <i class="fa-solid fa-phone"></i>
                            <!-- <img src="image/icons/phone.png" alt="phone"> -->
                            +91 000000000
                        </a>
                    </div>
                </div>

                <div class="col-md-2 col-lg-2 col-sm-12">
                    <a class="btn btn-primary btn-sm border-dark" href="<?php $siteurl ?>admin/admin_login.php" role="button">
                        <i class="fa-sharp fa-solid fa-gears"></i>
                        Admin
                    </a>
                </div>
            </div>
        </div>
        <!--nav open-->


        <nav class="navbar navbar-expand-sm navbar-dark sticky-top c-nav-bg">
            <div class="container-fluid">
                <a class="navbar-brand nav-logo" href="<?php $siteurl ?>">
                    <img class="img-thumbnail" src="image/logo.PNG" alt="logo">
                </a>
                <button class="navbar-toggler navbar" type="button" data-toggle="collapse" data-target="#mynav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center mr-5" id="mynav">
                    <ul class="navbar-nav text-center ml-5">
                        <li class="nav-item <?php if ($page == 'home') {
                                                echo 'active';
                                            } ?> ml-4">
                            <a class="nav-link" href="<?php $siteurl ?>">Home</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'services') {
                                                echo 'active';
                                            } ?> ml-4">
                            <a class="nav-link" href="<?php $siteurl ?>services.php"> Services</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'enroll') {
                                                echo 'active';
                                            } ?> ml-4">
                            <a class="nav-link" href="<?php $siteurl ?>enroll.php">Enroll</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'gallery') {
                                                echo 'active';
                                            } ?> ml-4">
                            <a class="nav-link" href="<?php $siteurl ?>gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'about') {
                                                echo 'active';
                                            } ?> ml-4">
                            <a class="nav-link" href="<?php $siteurl ?>about.php">About</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'contact') {
                                                echo 'active';
                                            } ?> ml-4">
                            <a class="nav-link" href="<?php $siteurl ?>contact.php">Contact</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'feedback') {
                                                echo 'active';
                                            } ?> ml-4">
                            <a class="nav-link" href="<?php $siteurl ?>feedback.php">Feedback</a>
                        </li>
                    </ul>
                    <div class="in-lg ml-5 mt-2">
                        <?php
                        if (!$loggedin) {
                            echo '<a class="btn btn-primary btn-sm border-dark mb-2" href="' . $siteurl . 'user_signup.php" role="button">
                            <i class="fa-solid fa-user"></i>
                            Sign-up
                        </a>
                        <a class="btn btn-primary btn-sm border-dark ml-4 mb-2" href="' . $siteurl . 'user_login.php" role="button">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            Log-in
                        </a>';
                        }
                        if ($loggedin) {
                        ?>
                            <ul>
                                <li>
                                    <h5><?php echo $_SESSION['username']; ?></h5>
                                </li>
                            </ul>
                        <?php
                            echo '<a class="btn btn-primary btn-sm border-dark ml-3 mb-2" href="' . $siteurl . 'user_logout.php" role="button">
                            <i class="fa-solid fa-right-to-bracket"></i>
                            Logout
                        </a>';
                        }
                        ?>
                    </div>

                </div>
            </div>
        </nav>

        <!--nav close-->
        <div class="container text-center text-white haderset">
            <h1>Welcome To D CONSULTING</h1>
            <p>D Consulting is a registered educational and job consultancy working to promote international education and help students to join the best Universities and colleges in the world and work with abroad in IT Industry.</p>
            <a class="btn btn-primary" href="<?php $siteurl ?>about.php" role="button">
                Read More
            </a>
        </div>

    </header>
    <!--header close-->