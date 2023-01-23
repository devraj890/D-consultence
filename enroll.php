<?php
include "connection/connect.php";

//clear session start notice......
error_reporting(E_ALL ^ E_NOTICE);

session_start();

$user = $_SESSION['username'];
if ($user == true) {
    $first_nameerror = "";
    $last_nameerror = "";
    $gendererror = "";
    $dateofbirtherror = "";
    $father_nameerror = "";
    $mother_nameerror = "";
    $phoneerror = "";
    $emailerror = "";
    $localadderror = "";
    $parmaadderror = "";
    $heducationerror = "";
    $marksheeterror = "";
    $aadharnoeroor = "";
    $aadharattacherror = "";
    $pannoerror = "";
    $panattacherror = "";
    $passporterror = "";
    $passattacherror = "";
    $sprogramerror = "";
    $countryerror = "";
    $universityerror = "";
    $courseerror = "";

    if (isset($_POST['submit'])) {
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
        //upload marksheet
        $marksheet = $_FILES["marksheet"]["name"];
        $aadhar_no = $_POST['aadhar_no'];
        //upload aadhar
        $aadhar = $_FILES["aadhar_attach"]["name"];
        $pan_no = $_POST['pan_no'];
        //upload pan
        $pan = $_FILES["pan_attach"]["name"];
        $passport = $_POST['passport'];
        //upload passport
        $pass = $_FILES["pass_attach"]["name"];
        $study_program = $_POST['sprogram'];
        $course = $_POST['course'];
        $country = $_POST['country'];
        $university = $_POST['university'];


        if (empty($first_name) || empty($last_name) || empty($gendar) || empty($date_of_birth) || empty($father_name) || empty($mother_name) || empty($phone) || empty($email) || empty($local_address) || empty($parmanent_address) || empty($highest_education) || empty($marksheet) || empty($aadhar_no) || empty($aadhar) || empty($pan_no) || empty($pan) || empty($passport) || empty($pass) || empty($study_program) || empty($course) || empty($country) || empty($university)) {
            $first_nameerror = "* Required..";
            $last_nameerror = "* Required..";
            $gendererror = "* Required..";
            $dateofbirtherror = "* Required..";
            $father_nameerror = "* Required..";
            $mother_nameerror = "* Required..";
            $phoneerror = "* Required..";
            $emailerror = "* Required..";
            $localadderror = "* Required..";
            $parmaadderror = "* Required..";
            $heducationerror = "* Required..";
            $marksheeterror = "* Required..";
            $aadharnoeroor = "* Required..";
            $aadharattacherror = "* Required..";
            $pannoerror = "* Required..";
            $panattacherror = "* Required..";
            $passporterror = "* Required..";
            $passattacherror = "* Required..";
            $sprogramerror = "* Required..";
            $courseerror = "* Required..";
            $countryerror = "* Required..";
            $universityerror = "* Required..";
        } else if (!preg_match("/\S+/", $first_name) || !preg_match("/\S+/", $last_name) || !preg_match("/\S+/", $father_name) || !preg_match("/\S+/", $mother_name)  || !preg_match("/^\d{10}$/", $phone) || !filter_var($email, FILTER_VALIDATE_EMAIL) || !preg_match("/\S+/", $highest_education) || !preg_match("/([^\\s]+(\\.(?i)(jpeg|jpg|png|Png|JPG|JPEG))$)/", $marksheet) || !preg_match("/^[2-9]{1}[0-9]{3}[0-9]{4}[0-9]{4}$/", $aadhar_no) || !preg_match("/([^\\s]+(\\.(?i)(jpeg|jpg|png|Png|JPG|JPEG))$)/", $aadhar) || !preg_match("/^[A-Z]{3}[ABCFGHLJPT][A-Z][0-9]{4}[A-Z]$/", $pan_no) || !preg_match("/([^\\s]+(\\.(?i)(jpeg|jpg|png|Png|JPG|JPEG))$)/", $pan) || !preg_match("/^[A-Z]{1}[0-9]{7}$/", $passport) || !preg_match("/([^\\s]+(\\.(?i)(jpeg|jpg|png|Png|JPG|JPEG))$)/", $pass)) {
            $first_nameerror = "* Only Letter and White Space allowed..";
            $last_nameerror = "* Only Letter and White Space allowed..";
            $father_nameerror = "* Only Letter and White Space allowed..";
            $mother_nameerror = "* Only Letter and White Space allowed..";
            $phoneerror = "* Only number with 10 digit Required..";
            $emailerror = "* Invalid email format..";

            $heducationerror = "* Only Letter and White Space allowed..";
            $marksheeterror = "* Only Jpeg, jpg, png image are allowed..";
            $aadharnoeroor = "* Only 9876 5432 1011 formate are allowed..";
            $aadharattacherror = "* Only Jpeg, jpg, png image are allowed..";
            $pannoerror = "* Only ABCPD1234D formate are allowed..";
            $panattacherror = "* Only Jpeg, jpg, png image are allowed..";
            $passporterror = "* Only A2190457 formate are allowed..";
            $passattacherror = "* Only Jpeg, jpg, png image are allowed..";
        } else {
            $query = "insert into tb_enroll (First_Name, Last_Name, Gendar, Date_of_Birth, Father_Name, Mother_Name, Phone, Email, Local_Address, Parmanent_Address, Highest_Education, Marksheet, Aadhar_No, aadhar, Pan_No, pan, Passport_No, passport, Study_Program, Country, University, Course) values ('$first_name', '$last_name', '$gendar', '$date_of_birth', '$father_name', '$mother_name','$phone', '$email', '$local_address', '$parmanent_address', '$highest_education', '$marksheet', '$aadhar_no', '$aadhar', '$pan_no', '$pan', '$passport', '$pass', '$study_program', '$country', '$university', '$course')";

            $result = mysqli_query($conn, $query);

            if ($result) {
                move_uploaded_file($_FILES["marksheet"]["tmp_name"], "db_photos/" . $_FILES["marksheet"]["name"]);

                move_uploaded_file($_FILES["aadhar_attach"]["tmp_name"], "db_photos/" . $_FILES["aadhar_attach"]["name"]);

                move_uploaded_file($_FILES["pan_attach"]["tmp_name"], "db_photos/" . $_FILES["pan_attach"]["name"]);

                move_uploaded_file($_FILES["pass_attach"]["tmp_name"], "db_photos/" . $_FILES["pass_attach"]["name"]);

                echo '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Success!</strong> Your entry has been submitted successfully! 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                        </div>';
            }
        }
    }
} else {
    header('location:user_login.php');
}

?>


<?php
$page = 'enroll';
require "Layouts/common_header.php";
?>

<!--section open for enroll-->
<section class="e-sec-first">
    <div class="container pl-0 pr-0">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="e-head">
                    <h2>Enroll Now</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 e-side">
                <div class="e-full">
                </div>
            </div>

            <div class="col-md-9 col-sm-9 e-fom">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" name="enroll_form" onsubmit="return validateForm()" enctype="multipart/form-data">

                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12" id="first_name">
                            <label class="control-label" for="first_name">* First Name:</label>
                            <input type="text" class="form-control" placeholder="Enter First Name" name="first_name" />
                            <strong> <span class="formerror"> </span></strong>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12" id="last_name">
                            <label class="control-label" for="last_name">* Last Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Last Name" name="last_name" />
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12" id="gender">
                            <label class="control-label" for="gender">* Gendar:</label>
                            <div class="form-check-inline">
                                <label class="form-check-label ml-2">
                                    <input type="radio" class="form-check-input" name="gender" value="Male" />Male
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label ml-2">
                                    <input type="radio" class="form-check-input" name="gender" value="Female" />Female
                                </label>
                            </div> <br>
                            <strong> <span class="formerror"> </span></strong>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12" id="date_of_birth">
                            <label class="control-label" for="date_of_birth">* Date of Birth:</label>
                            <input type="date" name="date_of_birth" class="w-50 ml-5"> <br>
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                    </div>

                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12" id="father_name">
                            <label class="control-label" for="father_name">* Father Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Father Name" name="father_name" />
                            <strong> <span class="formerror"> </span></strong>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12" id="mother_name">
                            <label class="control-label" for="mother_name">* Mother Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Mother Name" name="mother_name" />
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                    </div>

                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12" id="phone">
                            <label class="control-label" for="Phone">* Phone:</label>
                            <input type="number" class="form-control" placeholder="Enter Phone Number" name="phone" />
                            <strong> <span class="formerror"> </span></strong>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12" id="email">
                            <label class="control-label" for="email">* Email:</label>
                            <input type="email" class="form-control" placeholder="Enter Email Address" name="email" />
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                    </div>

                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-12 col-lg-12 col-sm-12" id="local_address">
                            <label class="control-label" for="local_address">* Local Address:</label>
                            <input type="text" class="form-control" placeholder="Enter Local Address" name="local_address" />
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                    </div>

                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-12 col-lg-12 col-sm-12" id="parmanent_address">
                            <label class="control-label" for="parmanent_address">* Parmanent Address:</label>
                            <input type="text" class="form-control" placeholder="Enter Parmanent Address" name="parmanent_address" />
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                    </div>

                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12" id="heducation">
                            <label class="control-label" for="heducation">* Highest Education:</label>
                            <input type="text" class="form-control" placeholder="Enter Highest Education" name="heducation" />
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12" id="marksheet">
                            <label class="control-label" for="Marksheet-Attach">* Marksheet-Attach:</label>
                            <input type="file" class="form-control" name="marksheet">
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                    </div>

                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12" id="aadhar_no">
                            <label class="control-label" for="aadhar_no">* Aadhar-No:</label>
                            <input type="text" class="form-control" placeholder="Enter Aadhar No" name="aadhar_no" />
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12" id="aadhar_attach">
                            <label class="control-label" for="aadhar_attach">* Aadhar-Attach:</label>
                            <input type="file" class="form-control" name="aadhar_attach" />
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                    </div>

                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12" id="pan_no">
                            <label class="control-label" for="pan_no">* Pan-No:</label>
                            <input type="text" class="form-control" placeholder="Enter Pan No" name="pan_no" />
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12" id="pan_attach">
                            <label class="control-label" for="pan_attach">* Pan-Attach:</label>
                            <input type="file" class="form-control" name="pan_attach" />
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                    </div>

                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12" id="passport">
                            <label class="control-label" for="passport">* Passport:</label>
                            <input type="text" class="form-control" placeholder="Enter Passport No" name="passport">
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12" id="pass_attach">
                            <label class="control-label" for="passport-attach">* Passport-Attach:</label>
                            <input type="file" class="form-control" name="pass_attach" />
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                    </div>

                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12" id="sprogram">
                            <label class="control-label" for="sprogram">* Study Program:</label>
                            <select class="form-control" name="sprogram" id="s_program">
                                <option value="" disabled selected>Select</option>

                                <?php
                                $psql1 = "select * from tb_sprogram";
                                $res1 = mysqli_query($conn, $psql1);

                                while ($row = mysqli_fetch_array($res1)) {
                                ?>

                                    <option value="<?= $row['program']; ?>"><?= $row['program']; ?></option>

                                <?php
                                }

                                ?>
                            </select>
                            <strong> <span class="formerror"> </span></strong>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12" id="course">
                            <label class="control-label" for="course">* Course:</label>
                            <select class="form-control" name="course" id="s_course">
                                <option value="" disabled selected>Select</option>

                                <?php
                                $psql2 = "select * from tb_course";
                                $res2 = mysqli_query($conn, $psql2);

                                while ($row = mysqli_fetch_array($res2)) {
                                ?>

                                    <option value="<?= $row['course']; ?>"><?= $row['course']; ?></option>

                                <?php
                                }
                                ?>
                            </select>
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                    </div>

                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12" id="country">
                            <label class="control-label" for="country">* Country:</label>
                            <select class="form-control" name="country">
                                <option value="" disabled selected>Select</option>

                                <?php
                                $psql3 = "select * from tb_country";
                                $res3 = mysqli_query($conn, $psql3);

                                while ($row = mysqli_fetch_array($res3)) {
                                ?>

                                    <option value="<?= $row['country']; ?>"><?= $row['country']; ?></option>

                                <?php
                                }
                                ?>
                                <!-- <option value="USA">USA</option>
                                <option value="Canada">Canada</option> -->
                            </select>
                            <strong> <span class="formerror"> </span></strong>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12" id="university">
                            <label class="control-label" for="university">* University:</label>
                            <select class="form-control" name="university">
                                <option value="" disabled selected>Select</option>

                                <?php
                                $psql4 = "select * from tb_university";
                                $res4 = mysqli_query($conn, $psql4);

                                while ($row = mysqli_fetch_array($res4)) {
                                ?>

                                    <option value="<?= $row['university']; ?>"><?= $row['university']; ?></option>

                                <?php
                                }
                                ?>
                                <!-- <option value="Stanford">Stanford</option>
                                <option value="Harvard">Harvard</option>
                                <option value="Toronto">Toronto</option>
                                <option value="British Columbia">British Columbia</option> -->
                            </select>
                            <strong> <span class="formerror"> </span></strong>
                        </div>
                    </div>
                    <hr>
                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <input type="submit" value="Submit" name="submit" class="btn btn-primary w-50" />
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <input type="reset" value="Clear" name="Clear" class="btn btn-primary w-50" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--section close-->

<?php require "Layouts/footer.php" ?>
<script src="js/enroll_validation.js"></script>