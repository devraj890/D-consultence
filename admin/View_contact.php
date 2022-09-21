<?php
include "../connection/connect.php";
session_start();

$user = $_SESSION['username'];

if ($user == true) {
    $query = "select * from tb_contact";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);
    $count = count($row);
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
            <li class="nav-item active">
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
                        <h1>Contact Table</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="separator pt-0 pb-0"></div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">

                <section class="view-contact-m">
                    <div class="container">

                        <div class="table-responsive table-responsive-sm table-responsive-md">
                            <table class="table table-bordered table-hover" id="conTable">
                                <thead class="thead-dark bg-primary">
                                    <tr>
                                        <th>S No.</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Comment</th>
                                    </tr>
                                </thead>

                                <?php

                                if ($count > 0) {
                                    $i = 0;
                                    do {
                                        $i = $i + 1;
                                ?>

                                        <tbody>
                                            <tr>
                                                <td><?php echo $i ?></td>
                                                <td><?php echo $row['Name'] ?></td>
                                                <td><?php echo $row['Phone'] ?></td>
                                                <td><?php echo $row['Email'] ?></td>
                                                <td><?php echo $row['Comment'] ?></td>
                                            </tr>
                                        </tbody>

                                <?php

                                    } while ($row = mysqli_fetch_array($result));
                                }
                                ?>
                            </table>
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
    <script src="../js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#conTable').DataTable();
        });
    </script>

</body>

</html>