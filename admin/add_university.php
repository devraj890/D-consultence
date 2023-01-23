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
    if (isset($_POST['add'])) {

        $country = $_POST['country'];
        $university = $_POST['university'];

        $existsql = "SELECT * FROM `tb_university` WHERE university = '$university'";
        $result = mysqli_query($conn, $existsql);
        $count = mysqli_num_rows($result);

        if ($count > 0) {
            $_SESSION['status'] = "University Already Exists!";
            header("location:manage_university.php");
        } else {
            $sql = "insert into tb_university (country_id, university) values ('$country', '$university')";
            $res = mysqli_query($conn, $sql);

            if ($res) {
                $_SESSION['status'] = "University Add Successfully.";
                header("location:manage_university.php");
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
                    <h1>Add University</h1>
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
                                <option value="<?= $row['conid']; ?>"><?= $row['country']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="course">University :</label>
                        <input type="text" class="form-control" id="university" placeholder="Enter course" name="university" required>
                    </div>

                    <div class="form-group mb-2 mt-2">
                        <button type="submit" class="btn btn-primary w-25" name="add">Add University</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include "partical-layout/foot.php";
?>