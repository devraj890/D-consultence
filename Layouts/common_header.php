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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css" integrity="sha512-Zofm3/rcTWulR1SqnrkCDKAs0A7ZVQHk+al10VOC0eo5sJBhMkKzA/RZOFC9JWiv4qqviYKYZ1sErzNs4BfLHA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

        /* .c-top-header {
            
        } */

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
    <header class="c-top-header">
        <div class="container-fluid sticky-top">
            <div class="row c-head">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="toolbar-social">
                        <a href="#">
                            <i class="fa-brands fa-facebook fa-lg ml-1 mr-1"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-square-instagram fa-lg ml-1 mr-1"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-linkedin fa-lg ml-1 mr-1"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-square-twitter fa-lg ml-1 mr-1"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4 col-sm-12">
                    <div class="toolbar-contact align-center">
                        <a href="mailto:info.dconsult@gmail.com">
                            <i class="fa-solid fa-envelope"></i>
                            info.dconsult@gmail.com
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="toolbar-contact align-center">
                        <a href="tel:+919786543210 ">
                            <i class="fa-solid fa-phone"></i>
                            +91 9876543210
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
                <a class="navbar-brand nav-logo" href="index.php">
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
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'services') {
                                                echo 'active';
                                            } ?> ml-4">
                            <a class="nav-link" href="services.php"> Services</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'enroll') {
                                                echo 'active';
                                            } ?> ml-4">
                            <a class="nav-link" href="enroll.php">Enroll</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'gallery') {
                                                echo 'active';
                                            } ?> ml-4">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'about') {
                                                echo 'active';
                                            } ?> ml-4">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item <?php if ($page == 'contact') {
                                                echo 'active';
                                            } ?> ml-4">
                            <a class="nav-link" href="contact.php">Contact</a>
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
    </header>
    <!--header close-->