<?php
include "../connection/connect.php";

//clear session start notice......
error_reporting(E_ALL ^ E_NOTICE);

// session_start();
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}    


$user = $_SESSION['username'];

if ($user == true) {
    if (isset($_POST['update_pass'])) {
        
        $uid = $_POST['uid'];
        $current_password = $_POST['cupass'];
        $new_password = $_POST['npass'];
        $confirm_password = $_POST['cpass'];

        $sql = "SELECT * FROM tb_user WHERE uid='".$id."' AND password='".$current_password."' ";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);
        if ($res == true) {
            // $count = mysqli_num_rows($res);
            if ($count == 1) {
                if ($new_password == $confirm_password) {
                    $sql2 = "UPDATE tb_user SET password='".$new_password."' WHERE uid ='".$id."' ";
                    $res2 = mysqli_query($conn, $sql2);

                    if ($res2 == true) {
                        $_SESSION['status'] = "Password Changed Successfully.";
                        header('location:manage_user.php');
                    } else {
                        $_SESSION['status'] = "Failed to Change Password.";
                        header('location:manage_user.php');
                    }
                } else {
                    $_SESSION['status'] = "Password Did not Match.";
                    header('location:manage_user.php');
                }
            } else {
                $_SESSION['status'] = "User Not Found.";
                header('location:manage_user.php');
            }
        }
    }
} else {
    header('location:admin_login.php');
}

?>


<?php
include "partical-layout/head.php";

include "partical-layout/nav.php";
?>


<!-- Page content holder -->
<div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold"></small></button>

    <!-- Demo content -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="a-head">
                    <h1>Update Password</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="separator pt-0 pb-0"></div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <a href="manage_user.php" class="btn btn-primary" role="button">Back</a>
            <div class="container update-form">
                <form action="" method="post">
                    <div class="form-group" id="cupass">
                        <label class="control-label" for="cupass">* Current Password :</label>
                        <input type="password" class="form-control" id="cupass" placeholder="Enter Current Password" name="cupass">
                        <!-- <strong> <span class="formerror"> </span></strong> -->
                    </div>

                    <div class="form-group" id="npass">
                        <label class="control-label" for="npass">* New Password :</label>
                        <input type="password" class="form-control" id="npass" placeholder="Enter New Password" name="npass">
                        <!-- <strong> <span class="formerror"> </span></strong> -->
                    </div>

                    <div class="form-group" id="cpass">
                        <label class="control-label" for="cpass">* Confirm Password :</label>
                        <input type="password" class="form-control" id="cpass" placeholder="Enter Confirm Password" name="cpass">
                        <!-- <strong> <span class="formerror"> </span></strong> -->
                    </div>

                    <div class="form-group mb-2 mt-2">
                        <button type="submit" class="btn btn-primary" name="update_pass">Update Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include "partical-layout/foot.php";
?>
