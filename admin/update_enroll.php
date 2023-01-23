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
        $query = "SELECT * from tb_enroll where Enroll_id = '$id' ";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
    }

        if (isset($_POST['update'])) {
            $id = $_POST['Enroll_id'];
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $gendar = $_POST['gender'];
            $date_of_birth = $_POST['date_of_birth'];
            $father_name = $_POST['father_name'];
            $mother_name = $_POST['mother_name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $local_address = $_POST['local_address'];
            $parmanent_address = $_POST['parmanent_address'];

            $highest_education = $_POST['heducation'];
            $marksheet = $_FILES["marksheet"]["name"];
            $old_marksheet = $_POST['old_marksheet'];

            $aadhar_no = $_POST['aadhar_no'];
            $aadhar = $_FILES["aadhar_attach"]["name"];
            $old_aadhar = $_POST['old_aadhar_attach'];

            $pan_no = $_POST['pan_no'];
            $pan = $_FILES["pan_attach"]["name"];
            $old_pan = $_POST['old_pan_attach'];

            $passport = $_POST['passport'];
            $pass = $_FILES["pass_attach"]["name"];
            $old_pass = $_POST['old_pass_attach'];

            $study_program = $_POST['sprogram'];
            $country = $_POST['country'];
            $university = $_POST['university'];
            $course = $_POST['course'];

            if ($marksheet != '') {
                $update_marksheet = $_FILES["marksheet"]["name"];
            } else {
                $update_marksheet = $old_marksheet;
            }

            if ($aadhar != '') {
                $update_aadhar = $_FILES["aadhar_attach"]["name"];
            } else {
                $update_aadhar = $old_aadhar;
            }

            if ($pan != '') {
                $update_pan = $_FILES["pan_attach"]["name"];
            } else {
                $update_pan = $old_pan;
            }

            if ($pass != '') {
                $update_pass = $_FILES["pass_attach"]["name"];
            } else {
                $update_pass = $old_pass;
            }

            if (
                $_FILES["marksheet"]["name"] != '' && $_FILES["aadhar_attach"]["name"] != '' &&
                $_FILES["pan_attach"]["name"] != '' && $_FILES["pass_attach"]["name"] != ''
            ) {
                if (file_exists($siteurl . "db_photos/" . $_FILES["marksheet"]["name"])) {
                    $ex_marksheet = $_FILES["marksheet"]["name"];
                    $_SESSION['status'] = "Image already exist " . $ex_marksheet;
                    header('location:view_enroll.php');
                }
                if (file_exists($siteurl . "db_photos/" . $_FILES["aadhar_attach"]["name"])) {
                    $ex_aadhar = $_FILES["aadhar_attach"]["name"];
                    $_SESSION['status'] = "Image already exist " . $ex_aadhar;
                    header('location:view_enroll.php');
                }
                if (file_exists($siteurl . "db_photos/" . $_FILES["pan_attach"]["name"])) {
                    $ex_pan = $_FILES["pan_attach"]["name"];
                    $_SESSION['status'] = "Image already exist " . $ex_pan;
                    header('location:view_enroll.php');
                }
                if (file_exists($siteurl . "db_photos/" . $_FILES["pass_attach"]["name"])) {
                    $ex_pass = $_FILES["pass_attach"]["name"];
                    $_SESSION['status'] = "Image already exist " . $ex_pass;
                    header('location:view_enroll.php');
                }
            } else {
                $query = " UPDATE tb_enroll SET First_Name='" . $first_name . "', Last_Name='" . $last_name . "',
            Gendar ='" . $gendar . "', Date_of_Birth='" . $date_of_birth . "', Father_Name='" . $father_name . "',
            Mother_Name='" . $mother_name . "',Phone='" . $phone . "', Email='" . $email . "',
            Local_Address='" . $local_address . "',Parmanent_Address='" . $parmanent_address . "',
            Highest_Education='" . $highest_education . "',Marksheet='" . $update_marksheet . "',
            Aadhar_No='" . $aadhar_no . "', aadhar='" . $update_aadhar . "', Pan_No='" . $pan_no . "', 
            pan='" . $update_pan . "', Passport_No='" . $passport . "', passport='" . $update_pass . "', 
            Study_Program='" . $study_program . "', Country='" . $country . "', University='" . $university . "', 
            Course='" . $course . "' WHERE Enroll_id='" . $id . "' ";

                $result = mysqli_query($conn, $query);

                if ($result) {
                    if ($_FILES["marksheet"]["name"] != '') {
                        move_uploaded_file($_FILES["marksheet"]["tmp_name"], "../db_photos/".$_FILES["marksheet"]["name"]);

                        if ($old_marksheet != "") {
                            $remove_path1 ="../db_photos/" . $old_marksheet;

                            $remove1 = unlink($remove_path1);

                            if ($remove1 == false) {
                                $_SESSION['status'] = "Failed to remove ";
                                header('location:view_enroll.php');
                            }
                        }
                    }

                    if ($_FILES["aadhar_attach"]["name"] != '') {
                        move_uploaded_file($_FILES["aadhar_attach"]["tmp_name"],"../db_photos/".$_FILES["aadhar_attach"]["name"]);

                        if ($old_aadhar != "") {
                            $remove_path2 = "../db_photos/".$old_aadhar;

                            $remove2 = unlink($remove_path2);

                            if ($remove2 == false) {
                                $_SESSION['status'] = "Failed to remove ";
                                header('location:view_enroll.php');
                            }
                        }
                    }

                    if ($_FILES["pan_attach"]["name"] != '') {
                        move_uploaded_file($_FILES["pan_attach"]["tmp_name"],"../db_photos/".$_FILES["pan_attach"]["name"]);

                        if ($old_pan != "") {
                            $remove_path3 ="../db_photos/".$old_pan;

                            $remove3 = unlink($remove_path3);

                            if ($remove3 == false) {
                                $_SESSION['status'] = "Failed to remove ";
                                header('location:view_enroll.php');
                            }
                        }
                    }

                    if ($_FILES["pass_attach"]["name"] != '') {
                        move_uploaded_file($_FILES["pass_attach"]["tmp_name"],"../db_photos/".$_FILES["pass_attach"]["name"]);

                        if ($old_pass != "") {
                            $remove_path4 ="../db_photos/".$old_pass;

                            $remove4 = unlink($remove_path4);

                            if ($remove4 == false) {
                                $_SESSION['status'] = "Failed to remove ";
                                header('location:view_enroll.php');
                            }
                        }
                    }

                    $_SESSION['status'] = "Data Update successfully";
                    header('location:view_enroll.php');
                } else {
                    $_SESSION['status'] = "Data Not Update";
                    header('location:view_enroll.php');
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
                    <h1>Update Enroll</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="separator pt-0 pb-0"></div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="container update-e-form">
                <a href="view_enroll.php" class="btn btn-primary" role="button">Back</a>
                <form action="update_enroll.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="inputid" name="Enroll_id" value="<?php echo $row['Enroll_id'] ?> ">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="first_name">First Name :</label>
                        <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name" value="<?php echo $row['First_Name']; ?> " required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="last_name">Last Name :</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name" value="<?php echo $row['Last_Name']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="gendar">Gendar :</label> <br>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" value="Male" required <?php
                                                                                                                    if ($row['Gendar'] == 'Male') {
                                                                                                                        echo "checked";
                                                                                                                    }
                                                                                                                    ?>>Male
                            </label>
                        </div>
                        <div class="form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" value="Female" required <?php
                                                                                                                    if ($row['Gendar'] == 'Female') {
                                                                                                                        echo "checked";
                                                                                                                    }
                                                                                                                    ?>>Female
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="date_of_birth">Date of Birth :</label> <br>
                        <input type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $row['Date_of_Birth']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="father_name">Father Name :</label>
                        <input type="text" class="form-control" id="father_name" placeholder="Enter Father Name" name="father_name" value="<?php echo $row['Father_Name']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="mother_name">Mother Name :</label>
                        <input type="text" class="form-control" id="mother_name" placeholder="Enter Mother Name" name="mother_name" value="<?php echo $row['Mother_Name']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="Phone">Phone :</label>
                        <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" value="<?php echo $row['Phone']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="email">Email :</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row['Email']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="local_address">Local Address :</label>
                        <input type="text" class="form-control" id="local_address" placeholder="Enter Local Address" name="local_address" value="<?php echo $row['Local_Address']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="parmanent_address">Parmanent Address :</label>
                        <input type="text" class="form-control" id="parmanent_address" placeholder="Enter Parmanent Address" name="parmanent_address" value="<?php echo $row['Parmanent_Address']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="heducation">Highest Education :</label>
                        <input type="text" class="form-control" id="heducation" placeholder="Enter Highest Education" name="heducation" value="<?php echo $row['Highest_Education']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="heducation">Marksheet :</label> <br>
                        <input type="file" name="marksheet" id="marksheet">
                        <input type="hidden" name="old_marksheet" id="old_marksheet" value="<?php echo $row['Marksheet']; ?>">
                        <img src="../db_photos/<?php echo $row['Marksheet']; ?>" width="100px" height="100px">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="aadhar_no">Aadhar-No :</label>
                        <input type="text" class="form-control" id="aadhar_no" placeholder="Enter Aadhar No" name="aadhar_no" value="<?php echo $row['Aadhar_No']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="aadhar_no">Aadhar :</label> <br>
                        <input type="file" name="aadhar_attach" id="aadhar_attach">
                        <input type="hidden" name="old_aadhar_attach" id="old_aadhar_attach" value="<?php echo $row['aadhar']; ?>">
                        <img src="../db_photos/<?php echo $row['aadhar']; ?>" width="100px" height="100px">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="pan_no">Pan-No :</label>
                        <input type="text" class="form-control" id="pan_no" placeholder="Enter Pan No" name="pan_no" value="<?php echo $row['Pan_No']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="pan_no">Pan :</label> <br>
                        <input type="file" name="pan_attach" id="pan_attach">
                        <input type="hidden" name="old_pan_attach" id="old_pan_attach" value="<?php echo $row['pan']; ?>">
                        <img src="../db_photos/<?php echo $row['pan']; ?>" width="100px" height="100px">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="passport">Passport No :</label>
                        <input type="text" class="form-control" id="passport" placeholder="Enter Passport No" name="passport" value="<?php echo $row['Passport_No']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="passport">Passport :</label> <br>
                        <input type="file" name="pass_attach" id="pass_attach">
                        <input type="hidden" name="old_pass_attach" id="old_pass_attach" value="<?php echo $row['passport']; ?>">
                        <img src="../db_photos/<?php echo $row['passport']; ?>" width="100px" height="100px">
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="sprogram">Study Program :</label>
                        <select class="form-control" name="sprogram" id="s_program">
                            <option value="" disabled selected>Select</option>
                            <?php
                            $psql1 = "SELECT * from `tb_sprogram` ";
                            $res1 = mysqli_query($conn, $psql1);

                            while ($row1 = mysqli_fetch_array($res1)) {
                            ?>

                                <option value="<?= $row1['program']; ?>" <?php
                                                                            if ($row['Study_Program'] == $row1['program']) {
                                                                                echo "selected";
                                                                            }
                                                                            ?>><?= $row1['program']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>


                    <div class="form-group">
                        <label class="control-label" for="course">Course :</label>
                        <select class="form-control" name="course" id="s_course">
                            <option value="" disabled selected>Select</option>

                            <?php
                            $psql2 = "SELECT * from `tb_course` ";
                            $res2 = mysqli_query($conn, $psql2);

                            while ($row2 = mysqli_fetch_array($res2)) {

                            ?>
                                <option value="<?= $row2['course']; ?>" <?php
                                                                        if ($row['Course'] == $row2['course']) {
                                                                            echo "selected";
                                                                        }
                                                                        ?>><?= $row2['course']; ?></option>

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
                            $psql3 = "SELECT * from `tb_country` ";
                            $res3 = mysqli_query($conn, $psql3);

                            while ($row3 = mysqli_fetch_array($res3)) {
                            ?>

                                <option value="<?= $row3['country']; ?>" <?php
                                                                            if ($row['Country']  == $row3['country']) {
                                                                                echo "selected";
                                                                            }
                                                                            ?>><?= $row3['country']; ?></option>

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
                            $psql4 = "SELECT * from `tb_university` ";
                            $res4 = mysqli_query($conn, $psql4);

                            while ($row4 = mysqli_fetch_array($res4)) {
                            ?>

                                <option value="<?= $row4['university']; ?>" <?php
                                                                            if ($row['University'] == $row4['university']) {
                                                                                echo "selected";
                                                                            }
                                                                            ?>><?= $row4['university']; ?></option>

                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Update" name="update" class="btn btn-primary w-100">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
include "partical-layout/foot.php";
?>