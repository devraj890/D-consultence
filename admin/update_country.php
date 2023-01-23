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
        $sql = "SELECT * FROM tb_country WHERE conid='$id' ";
        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);
        if ($res == true) {
            if ($count == 1) {
                $row = mysqli_fetch_assoc($res);

                $country = $row['country'];
            } else {
                header('location:manage_country.php');
            }
        }
    }


    if (isset($_POST['update'])) {

        // $uid = $_POST['uid'];
        $country = $_POST['country'];

        $sql = "UPDATE tb_country SET country = '" . $country . "' WHERE conid='" . $id . "' ";

        $res = mysqli_query($conn, $sql);

        if ($res == true) {
            $_SESSION['status'] = "Country Updated Successfully.";
            header("location:manage_country.php");
        } else {
            $_SESSION['status'] = "Failed to Update Country";
            header('location:manage_country.php');
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
                    <h1>Update Country</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="separator pt-0 pb-0"></div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <a href="manage_country.php" class="btn btn-primary" role="button">Back</a>
            <div class="container update-form">
                <form action="" method="post">
                    <div class="form-group">
                        <label class="control-label" for="program">Country :</label>
                        <input type="text" class="form-control" id="country" placeholder="Enter country" name="country" value="<?php echo $country; ?>" required>
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