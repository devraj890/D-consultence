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
    $sql = "SELECT * FROM tb_user WHERE uid='$id' ";
    $res = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($res);
    if ($res == true) {
        if ($count == 1) {
            $row = mysqli_fetch_assoc($res);

            $name = $row['name'];
            $gender = $row['gender'];
            $phone = $row['phone'];
            $email = $row['email'];
            $address = $row['address'];
            $username = $row['username'];
        } else {
            header('location:manage_user.php');
        }
    }
}


if (isset($_POST['update'])) {

    // $uid = $_POST['uid'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $username = $_POST['username'];

    $sql = "UPDATE tb_user SET name = '" . $name . "', gender = '" . $gender . "', phone = '" . $phone . "', email = '" . $email . "', address = '" . $address . "', username = '" . $username . "' WHERE uid='" . $id . "' ";

    $res = mysqli_query($conn, $sql);

    if ($res == true) {
        $_SESSION['status'] = "User Updated Successfully.";
        header("location:manage_user.php");
    } else {
        $_SESSION['status'] = "Failed to Update User";
        header('location:manage_user.php');
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
                    <div class="form-group">
                        <label class="control-label" for="name">Name :</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?php echo $name; ?>" required>
                    </div>

                    <div class=" form-group">
                        <label class="control-label" for="gender">Gender :</label> <br>
                        <div class="form-check-inline">
                            <label class="form-check-label ml-2">
                                <input type="radio" class="form-check-input" name="gender" value="Male" <?php
                                                                                                        if ($row['gender'] == 'Male') {
                                                                                                            echo "checked";
                                                                                                        }
                                                                                                        ?>> Male
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label ml-2">
                                <input type="radio" class="form-check-input" name="gender" value="Female" <?php
                                                                                                            if ($row['gender'] == 'Female') {
                                                                                                                echo "checked";
                                                                                                            }
                                                                                                            ?>> Female
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="Phone">Phone :</label>
                        <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" value="<?php echo $phone; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="email">Email :</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $email; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="address">Address :</label>
                        <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address" value="<?php echo $address; ?>" required>
                    </div>

                    <div class=" form-group">
                        <label class="control-label" for="username">Username :</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter Username" name="username" value="<?php echo $row['username']; ?>" required>
                    </div>

                    <div class=" form-group mb-2 mt-2">
                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include "partical-layout/foot.php";
?>