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
    }
    $query = "SELECT * from tb_enroll where Enroll_id = '$id' ";
    $result = mysqli_query($conn, $query);

    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $row = mysqli_fetch_array($result);
        $dob = $row['Date_of_Birth'];
        $timestamp = strtotime($dob);
        $Date_of_birth = date("d-m-Y", $timestamp);
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
                    <h1>Enroll Details</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="separator pt-0 pb-0"></div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <!--section open for enroll-->
            <section class="enrol-sec">
                <div class="container">
                    <a href="view_enroll.php" class="btn btn-primary ml-3">Back</a>
                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>First Name:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['First_Name']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Last Name:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['Last_Name']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Gendar:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['Gendar']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Date of Birth:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $Date_of_birth ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Father Name:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['Father_Name']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Mother Name:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['Mother_Name']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Phone:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['Phone']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Email:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['Email']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Local Address:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['Local_Address']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Parmanent Address:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['Parmanent_Address']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Highest Education:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['Highest_Education']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Marksheet:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p><img src="../db_photos/<?php echo $row['Marksheet']; ?>" width="100px" height="100px"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Aadhar No:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['Aadhar_No']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Aadhar:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <img src="../db_photos/<?php echo $row['aadhar']; ?>" width="100" height="100"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Pan No:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['Pan_No']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>pan-card:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p><img src="../db_photos/<?php echo $row['pan']; ?>" width="100" height="100"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Passport_No:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['Passport_No']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>passport:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <img src="../db_photos/<?php echo $row['passport']; ?>" width="100" height="100"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Study Program:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['Study_Program']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Course:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['Course']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 mb-4 ml-1 mr-1">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>Country:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['Country']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <h5>University:</h5>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-12">
                                    <p> <?php echo $row['University']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--section close-->
        </div>
    </div>
</div>


<?php
include "partical-layout/foot.php";
?>