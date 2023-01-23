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
        $sql = "SELECT * FROM tb_university WHERE uid='$id' ";
        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);
        if ($res == true) {
            if ($count == 1) {
                $row = mysqli_fetch_assoc($res);

                $country = $row['country_id'];
                $university = $row['university'];
            } else {
                header('location:manage_university.php');
            }
        }
    }


    if (isset($_POST['update'])) {

        // $uid = $_POST['uid'];
        $country = $_POST['country'];
        $university = $_POST['university'];

        $sql = "UPDATE tb_university SET country_id = '" . $country . "', university = '" . $university . "' WHERE uid='" . $id . "' ";

        $res = mysqli_query($conn, $sql);

        if ($res == true) {
            $_SESSION['status'] = "University Updated Successfully.";
            header("location:manage_university.php");
        } else {
            $_SESSION['status'] = "Failed to Update University";
            header('location:manage_university.php');
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
                    <h1>Update University</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="separator pt-0 pb-0"></div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <a href="manage_university.php" class="btn btn-primary" role="button">Back</a>
            <div class="container update-form">
                <form action="" method="post">

                    <div class="form-group">
                        <label class="control-label" for="country">Country :</label>
                        <select class="form-control" name="country" id="country">
                            <option value="" disabled selected>Select</option>
                            <?php
                            $psql = "select * from tb_country";
                            $res = mysqli_query($conn, $psql);

                            while ($row = mysqli_fetch_array($res)) {
                            ?>
                                <option value="<?= $row['conid']; ?>" <?php
                                                                        if ($row['conid'] == $country) {
                                                                            echo "selected";
                                                                        }
                                                                        ?>><?= $row['country']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="university">University :</label>
                        <input type="text" class="form-control" id="university" placeholder="Enter university" name="university" value="<?php echo $university; ?>" required>
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