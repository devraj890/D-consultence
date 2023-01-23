<?php
include "../connection/connect.php";

//clear session start notice......
error_reporting(E_ALL ^ E_NOTICE);

// session_start();
if (!isset($_SESSION)) {
    session_start();
}

$user = $_SESSION['username'];

if ($user == true) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM tb_course WHERE cid='$id' ";
        $res = mysqli_query($conn, $sql);

        if ($res == true) {
            $_SESSION['status'] = "Course Deleted Successfully.";
            header('location:manage_course.php');
        } else {
            $_SESSION['status'] = "Failed to Delete Course. Try Again Later.";
            header('location:manage_course.php');
        }
    } else {
        $_SESSION['status'] = "Course Not Found.";
        header('location:manage_course.php');
    }
}
