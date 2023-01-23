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
        $program = $_POST['program'];

        $existsql = "SELECT * FROM `tb_sprogram` WHERE program = '$program'";
        $result = mysqli_query($conn, $existsql);

        $count = mysqli_num_rows($result);

        if ($count > 0) {
            $_SESSION['status'] = "Program Already Exists!";
            header("location:manage_program.php");
        } 
        else {
            $sql = "insert into tb_sprogram (program) values ('$program')";
            $res = mysqli_query($conn, $sql);

            if ($res) {
                $_SESSION['status'] = "Program Add Successfully.";
                header("location:manage_program.php");
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
                    <h1>Add Program</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="separator pt-0 pb-0"></div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <a href="manage_program.php" class="btn btn-primary" role="button">Back</a>
            <div class="container update-form">
                <form action="" method="post">
                    <div class="form-group">
                        <label class="control-label" for="program">Program :</label>
                        <input type="text" class="form-control" id="program" placeholder="Enter Program" name="program" required>
                    </div>

                    <div class="form-group mb-2 mt-2">
                        <button type="submit" class="btn btn-primary w-25" name="add">Add Program</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include "partical-layout/foot.php";
?>