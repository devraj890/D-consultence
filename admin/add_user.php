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
    if (isset($_POST['submit'])) {

        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $existsql = "SELECT * FROM `tb_user` WHERE username = '$username'";
        $result = mysqli_query($conn, $existsql);

        $count = mysqli_num_rows($result);

        if ($count > 0) {
            $_SESSION['status'] = "Username Already Exists!.";
            header("location:manage_user.php");
        } else {
            if ($password == $cpassword) {
                $sql = "insert into tb_user (name,gender,phone,email,address,username,password) values ('$name', '$gender', '$phone', '$email', '$address', '$username', '$password')";
                $res = mysqli_query($conn, $sql);

                if ($res) {
                    $_SESSION['status'] = "User Add Successfully.";
                    header("location:manage_user.php");
                }
            } else {
                $_SESSION['status'] = "Password do not match!";
                header("location:manage_user.php");
            }
        }
    }
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
                    <h1>Add User</h1>
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
                    <div class="form-group">
                        <label class="control-label" for="name">Name :</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="gender">Gender :</label> <br>
                        <div class="form-check-inline">
                            <label class="form-check-label ml-2">
                                <input type="radio" class="form-check-input" name="gender" value="Male" /> Male
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label ml-2">
                                <input type="radio" class="form-check-input" name="gender" value="Female" /> Female
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="Phone">Phone :</label>
                        <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="email">Email :</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="address">Address :</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="username">Username :</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="password">Password :</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="cpassword">Confirm Password :</label>
                        <input type="password" class="form-control" id="cpassword" placeholder="Confirm password" name="cpassword" required>
                    </div>

                    <div class="form-group mb-2 mt-2">
                        <button type="submit" class="btn btn-primary w-25" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include "partical-layout/foot.php";
?>