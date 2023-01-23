<?php
include "../connection/connect.php";

// session_start();
if (!isset($_SESSION)) {
    session_start();
}
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
    <link rel="stylesheet" href="../css/admin_style.css">
    <link rel="stylesheet" href="../css/jquery.dataTables.min.css">

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
    <script src="../js/sidebar.js"></script>

    <script src="../js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</head>

<body>