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
        $sql = "SELECT * FROM tb_course WHERE cid='$id' ";
        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);
        if ($res == true) {
            if ($count == 1) {
                $row = mysqli_fetch_assoc($res);

                $program = $row['program_id'];
                $course = $row['course'];
            } else {
                header('location:manage_course.php');
            }
        }
    }


    if (isset($_POST['update'])) {

        // $uid = $_POST['uid'];
        $program = $_POST['sprogram'];
        $course = $_POST['course'];

        $sql = "UPDATE tb_course SET program_id = '" . $program . "', course = '" . $course . "' WHERE cid='" . $id . "' ";

        $res = mysqli_query($conn, $sql);

        if ($res == true) {
            $_SESSION['status'] = "Course Updated Successfully.";
            header("location:manage_course.php");
        } else {
            $_SESSION['status'] = "Failed to Update Course";
            header('location:manage_course.php');
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
                    <h1>Update Program</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="separator pt-0 pb-0"></div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <a href="manage_course.php" class="btn btn-primary" role="button">Back</a>
            <div class="container update-form">
                <form action="" method="post">
                    <!-- <div class="form-group">
                        <label class="control-label" for="program">Program :</label>
                        <input type="text" class="form-control" id="program" placeholder="Enter Program" name="program" value="<?php echo $program; ?>" required>
                    </div> -->

                    <div class="form-group">
                        <label class="control-label" for="sprogram">Study Program :</label>
                        <select class="form-control" name="sprogram" id="s_program">
                            <option value="" disabled selected>Select</option>
                            <?php
                            $psql = "select * from tb_sprogram";
                            $res = mysqli_query($conn, $psql);

                            while ($row = mysqli_fetch_array($res)) {
                            ?>
                                <option value="<?= $row['spid']; ?>" <?php
                                                                        if ($row['spid'] == $program) {
                                                                            echo "selected";
                                                                        }
                                                                        ?>><?= $row['program']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="course">Course :</label>
                        <input type="text" class="form-control" id="course" placeholder="Enter course" name="course" value="<?php echo $course; ?>" required>
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