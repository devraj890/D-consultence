<?php
include "../connection/connect.php";

session_start();

$user = $_SESSION['username'];

if ($user == true) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "select * from tb_enroll where Enroll_id = '$id' ";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_array($result);
    } else {
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
                $update_pan = $pan = $_FILES["pan_attach"]["name"];
            } else {
                $update_pan = $old_pan;
            }

            if ($pass != '') {
                $update_pass = $pass = $_FILES["pass_attach"]["name"];
            } else {
                $update_pass = $old_pass;
            }

            if (
                $_FILES["marksheet"]["name"] != '' && $_FILES["aadhar_attach"]["name"] != '' &&
                $_FILES["pan_attach"]["name"] != '' && $_FILES["pass_attach"]["name"] != ''
            ) {
                if (file_exists("db_photos/" . $_FILES["marksheet"]["name"])) {
                    $ex_marksheet = $_FILES["marksheet"]["name"];
                    $_SESSION['status'] = "Image already exist " . $ex_marksheet;
                    header('location:view_enroll.php');
                }
                if (file_exists("db_photos/" . $_FILES["aadhar_attach"]["name"])) {
                    $ex_aadhar = $_FILES["aadhar_attach"]["name"];
                    $_SESSION['status'] = "Image already exist " . $ex_aadhar;
                    header('location:view_enroll.php');
                }
                if (file_exists("db_photos/" . $_FILES["pan_attach"]["name"])) {
                    $ex_pan = $_FILES["pan_attach"]["name"];
                    $_SESSION['status'] = "Image already exist " . $ex_pan;
                    header('location:view_enroll.php');
                }
                if (file_exists("db_photos/" . $_FILES["pass_attach"]["name"])) {
                    $ex_pass = $_FILES["pass_attach"]["name"];
                    $_SESSION['status'] = "Image already exist " . $ex_pass;
                    header('location:view_enroll.php');
                }
            } else {
                $query = " update tb_enroll set First_Name='" . $first_name . "', Last_Name='" . $last_name . "',
            Gendar ='" . $gendar . "', Date_of_Birth='" . $date_of_birth . "', Father_Name='" . $father_name . "',
            Mother_Name='" . $mother_name . "',Phone='" . $phone . "', Email='" . $email . "',
            Local_Address='" . $local_address . "',Parmanent_Address='" . $parmanent_address . "',
            Highest_Education='" . $highest_education . "',Marksheet='" . $update_marksheet . "',
            Aadhar_No='" . $aadhar_no . "', aadhar='" . $update_aadhar . "', Pan_No='" . $pan_no . "', 
            pan='" . $update_pan . "', Passport_No='" . $passport . "', passport='" . $update_pass . "', 
            Study_Program='" . $study_program . "', Country='" . $country . "', University='" . $university . "', 
            Course='" . $course . "' where Enroll_id='" . $id . "' ";

                $result = mysqli_query($conn, $query);

                if ($result) {
                    if ($_FILES["marksheet"]["name"] != '') {
                        move_uploaded_file($_FILES["marksheet"]["tmp_name"], "../db_photos/" . $_FILES["marksheet"]["name"]);
                    }

                    if ($_FILES["aadhar_attach"]["name"] != '') {
                        move_uploaded_file($_FILES["aadhar_attach"]["tmp_name"], "../db_photos/" . $_FILES["aadhar_attach"]["name"]);
                    }

                    if ($_FILES["pan_attach"]["name"] != '') {
                        move_uploaded_file($_FILES["pan_attach"]["tmp_name"], "../db_photos/" . $_FILES["pan_attach"]["name"]);
                    }

                    if ($_FILES["pass_attach"]["name"] != '') {
                        move_uploaded_file($_FILES["pass_attach"]["tmp_name"], "../db_photos/" . $_FILES["pass_attach"]["name"]);
                    }
                    $_SESSION['status'] = "Data Update successfully";
                    header('location:view_enroll.php');
                } else {
                    $_SESSION['status'] = "Data Not Update";
                    header('location:view_enroll.php');
                }
            }
        }
    }
} else {
    header('location:admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="../css/all.min.css">
    <!--link for font awesome 6.1..-->
    <!--link for bootstrap 4..-->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../css/bootstrap-grid.css">
    <link rel="stylesheet" href="admin_style.css">

</head>

<body>


    <!-- Vertical navbar -->
    <div class="vertical-nav bg-white" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
            <div class="media d-flex align-items-center">
                <img loading="lazy" src="../image/logo.png" alt="..." width="120" height="120" class="mr-3 rounded-square img-thumbnail shadow-sm">
                <div class="media-body">
                    <h4 class="m-0">Admin</h4>
                </div>
            </div>
        </div>

        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Dashboard</p>

        <ul class="nav flex-column bg-white mb-0">
            <li class="nav-item">
                <a href="admin_dashboard.php" class="nav-link text-dark bg-light">
                    <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="View_contact.php" class="nav-link text-dark">
                    <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                    view_contact
                </a>
            </li>
            <li class="nav-item active">
                <a href="view_enroll.php" class="nav-link text-dark">
                    <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                    view_enroll
                </a>
            </li>
            <li class="nav-item mt-3">
                <a class="btn btn-primary ml-4" href="admin_logout.php" role="button">
                    Log-out
                </a>
            </li>
        </ul>
    </div>
    <!-- End vertical navbar -->



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


                <section class="view-contact-m">
                    <div class="container">

                        <form action="update_enroll.php" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="inputid" name="Enroll_id" value="<?php echo $row['Enroll_id'] ?> ">
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="first_name">* First Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name" value="<?php echo $row['First_Name']; ?> " required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="last_name">* Last Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name" value="<?php echo $row['Last_Name']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="gendar">* Gendar:</label>
                                <div class="col-sm-9">
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
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="date_of_birth">* Date of Birth:</label>
                                <div class="col-sm-9">
                                    <input type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $row['Date_of_Birth']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="father_name">* Father Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="father_name" placeholder="Enter Father Name" name="father_name" value="<?php echo $row['Father_Name']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="mother_name">* Mother Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="mother_name" placeholder="Enter Mother Name" name="mother_name" value="<?php echo $row['Mother_Name']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="Phone">* Phone:</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone" value="<?php echo $row['Phone']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="email">* Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row['Email']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="local_address">* Local Address:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="local_address" placeholder="Enter Local Address" name="local_address" value="<?php echo $row['Local_Address']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4" for="parmanent_address">* Parmanent Address:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="parmanent_address" placeholder="Enter Parmanent Address" name="parmanent_address" value="<?php echo $row['Parmanent_Address']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4" for="heducation">* Highest Education:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="heducation" placeholder="Enter Highest Education" name="heducation" value="<?php echo $row['Highest_Education']; ?>" required>
                                    <input type="file" name="marksheet" id="marksheet">
                                    <input type="hidden" name="old_marksheet" id="old_marksheet" value="<?php echo $row['Marksheet']; ?>">
                                    <img src="../db_photos/<?php echo $row['Marksheet']; ?>" width="100px" height="100px">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4" for="aadhar_no">* Aadhar-No:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="aadhar_no" placeholder="Enter Aadhar No" name="aadhar_no" value="<?php echo $row['Aadhar_No']; ?>" required>
                                    <input type="file" name="aadhar_attach" id="aadhar_attach">
                                    <input type="hidden" name="old_aadhar_attach" id="old_aadhar_attach" value="<?php echo $row['aadhar']; ?>">
                                    <img src="../db_photos/<?php echo $row['aadhar']; ?>" width="100px" height="100px">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4" for="pan_no">* Pan-No:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="pan_no" placeholder="Enter Pan No" name="pan_no" value="<?php echo $row['Pan_No']; ?>" required>
                                    <input type="file" name="pan_attach" id="pan_attach">
                                    <input type="hidden" name="old_pan_attach" id="old_pan_attach" value="<?php echo $row['pan']; ?>">
                                    <img src="../db_photos/<?php echo $row['pan']; ?>" width="100px" height="100px">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-4" for="passport">* Passport:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="passport" placeholder="Enter Passport No" name="passport" value="<?php echo $row['Passport_No']; ?>" required>
                                    <input type="file" name="pass_attach" id="pass_attach">
                                    <input type="hidden" name="old_pass_attach" id="old_pass_attach" value="<?php echo $row['passport']; ?>">
                                    <img src="../db_photos/<?php echo $row['passport']; ?>" width="100px" height="100px">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="sprogram">* Study Program:</label>
                                <div class="col-sm-9">
                                    <select class="form-control-custom" name="sprogram" id="sprogram" required>
                                        <option value="">Select</option>
                                        <option value="Diploma" <?php
                                                                if ($row['Study_Program'] == 'Diploma') {
                                                                    echo "selected";
                                                                }
                                                                ?>>Diploma</option>
                                        <option value="Under_Graduation" <?php
                                                                            if ($row['Study_Program'] == 'Under_Graduation') {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>Under Graduation</option>
                                        <option value="Post_Graduation" <?php
                                                                        if ($row['Study_Program'] == 'Post_Graduation') {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Post Graduation</option>
                                        <option value="Phd" <?php
                                                            if ($row['Study_Program'] == 'Phd') {
                                                                echo "selected";
                                                            }
                                                            ?>>Phd</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="country">* Country:</label>
                                <div class="col-sm-9">
                                    <select class="form-control-custom" name="country" id="country" required>
                                        <option value="">Select</option>
                                        <option value="USA" <?php
                                                            if ($row['Country'] == 'USA') {
                                                                echo "selected";
                                                            }
                                                            ?>>USA</option>
                                        <option value="Canada" <?php
                                                                if ($row['Country'] == 'Canada') {
                                                                    echo "selected";
                                                                }
                                                                ?>>Canada</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="university">* University:</label>
                                <div class="col-sm-9">
                                    <select class="form-control-custom" name="university" id="university" required>
                                        <option value="">Select</option>
                                        <option value="Stanford" <?php
                                                                    if ($row['University'] == 'Stanford') {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Stanford</option>
                                        <option value="Harvard" <?php
                                                                if ($row['University'] == 'Harvard') {
                                                                    echo "selected";
                                                                }
                                                                ?>>Harvard</option>
                                        <option value="Toronto" <?php
                                                                if ($row['University'] == 'Toronto') {
                                                                    echo "selected";
                                                                }
                                                                ?>>Toronto</option>
                                        <option value="British_Columbia" <?php
                                                                            if ($row['University'] == 'British_Columbia') {
                                                                                echo "selected";
                                                                            }
                                                                            ?>>British Columbia</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3" for="course">* Course:</label>
                                <div class="col-sm-9">
                                    <select class="form-control-custom" name="course" id="course" required>
                                        <option value="">Select</option>
                                        <option value="cyber_law" <?php
                                                                    if ($row['Course'] == 'cyber_law') {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Cyber Law</option>
                                        <option value="BSC" <?php
                                                            if ($row['Course'] == 'BSC') {
                                                                echo "selected";
                                                            }
                                                            ?>>BSC</option>
                                        <option value="BCA" <?php
                                                            if ($row['Course'] == 'BCA') {
                                                                echo "selected";
                                                            }
                                                            ?>>BCA</option>
                                        <option value="MSC" <?php
                                                            if ($row['Course'] == 'MSC') {
                                                                echo "selected";
                                                            }
                                                            ?>>MSC</option>
                                        <option value="MCA" <?php
                                                            if ($row['Course'] == 'MCA') {
                                                                echo "selected";
                                                            }
                                                            ?>>MCA</option>
                                        <option value="PHD" <?php
                                                            if ($row['Course'] == 'PHD') {
                                                                echo "selected";
                                                            }
                                                            ?>>PHD</option>
                                    </select>
                                </div>
                            </div>

                            <input type="submit" value="Update" name="update" class="btn btn-primary ml-5">
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <!--all bs Scripts-->
    <script src="../js/jquery.min.js"></script>
    <!--link for jquery..-->
    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <!--link for bootstrap 4 js..-->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/popper-utils.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/all.min.js"></script>
    <!--link for font awesome 6.1..-->
    <script src="sidebar.js"></script>

</body>

</html>