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
        $sql = "SELECT * FROM tb_feedback WHERE fid='$id' ";
        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);
        if ($res == true) {
            if ($count == 1) {
                $row = mysqli_fetch_assoc($res);
                $name = $row['name'];
                $course = $row['course'];
                $country = $row['country'];
                $university = $row['university'];
                $comment = $row['message'];
            } else {
                header('location:manage_feedback.php');
            }
        }
    }


    if (isset($_POST['update'])) {

        // $uid = $_POST['uid'];
        $name = $_POST['name'];
        $course = $_POST['course'];
        $country = $_POST['country'];
        $university = $_POST['university'];
        $comment = $_POST['comment'];

        $sql = "UPDATE tb_feedback SET name = '" . $name . "', course = '" . $course . "', country = '" . $country . "', university = '" . $university . "', message = '" . $comment . "' WHERE fid='" . $id . "' ";

        $res = mysqli_query($conn, $sql);

        if ($res == true) {
            $_SESSION['status'] = "Feedback Updated Successfully.";
            header("location:manage_feedback.php");
        } else {
            $_SESSION['status'] = "Failed to Update Feedback";
            header('location:manage_feedback.php');
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
            <a href="manage_feedback.php" class="btn btn-primary" role="button">Back</a>
            <div class="container update-form">
                <form action="" method="post">

                    <div class="form-group">
                        <label class="control-label" for="name">Name :</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name" value="<?php echo $name; ?>">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="course">Course :</label>
                        <select class="form-control" name="course" id="s_course">
                            <option value="" disabled selected>Select</option>

                            <?php
                            $psql2 = "select * from tb_course";
                            $res2 = mysqli_query($conn, $psql2);

                            while ($row1 = mysqli_fetch_array($res2)) {
                            ?>

                                <option value="<?= $row1['course']; ?>" <?php 
                                if($row1['course'] == $course)
                                {
                                    echo "selected";
                                } 
                                ?>><?= $row1['course']; ?></option>

                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="country">Country :</label>
                        <select class="form-control" name="country">
                            <option value="" disabled selected>Select</option>

                            <?php
                            $psql3 = "select * from tb_country";
                            $res3 = mysqli_query($conn, $psql3);

                            while ($row2 = mysqli_fetch_array($res3)) {
                            ?>

                                <option value="<?= $row2['country']; ?>"
                                <?php 
                                if($row2['country'] == $country)
                                {
                                    echo "selected";
                                } 
                                ?>><?= $row2['country']; ?></option>

                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="university">University :</label>
                        <select class="form-control" name="university">
                            <option value="" disabled selected>Select</option>

                            <?php
                            $psql4 = "select * from tb_university";
                            $res4 = mysqli_query($conn, $psql4);

                            while ($row3 = mysqli_fetch_array($res4)) {
                            ?>

                                <option value="<?= $row3['university']; ?>"
                                <?php 
                                if($row3['university'] == $university)
                                {
                                    echo "selected";
                                } 
                                ?>><?= $row3['university']; ?></option>

                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group" id="comment">
                        <label class="control-label" for="comment">Message :</label>
                        <textarea class="form-control" rows="5" name="comment"><?= $row['message']; ?></textarea>
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