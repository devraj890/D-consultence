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
                    <h1>Welcome Admin</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="separator pt-0 pb-0"></div>
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12 box">
                        <?php
                        $sql1 = "SELECT * FROM tb_sprogram";
                        $res1 = mysqli_query($conn, $sql1);
                        $count1 = mysqli_num_rows($res1);
                        ?>
                        <h1><?php echo $count1; ?></h1>
                        <br />
                        <h2>Study Program</h2>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-12 box">
                        <?php
                        $sql2 = "SELECT * FROM tb_course";
                        $res2 = mysqli_query($conn, $sql2);
                        $count2 = mysqli_num_rows($res2);
                        ?>
                        <h1><?php echo $count2; ?></h1>
                        <br />
                        <h2>Course</h2>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-12 box">
                        <?php
                        $sql3 = "SELECT * FROM tb_country";
                        $res3 = mysqli_query($conn, $sql3);
                        $count3 = mysqli_num_rows($res3);
                        ?>
                        <h1><?php echo $count3; ?></h1>
                        <br />
                        <h2>Country</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-12 box">
                        <?php
                        $sql4 = "SELECT * FROM tb_university";
                        $res4 = mysqli_query($conn, $sql4);
                        $count4 = mysqli_num_rows($res4);
                        ?>
                        <h1><?php echo $count4; ?></h1>
                        <br />
                        <h2>University</h2>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-12 box">
                        <?php
                        $sql5 = "SELECT * FROM tb_user";
                        $res5 = mysqli_query($conn, $sql5);
                        $count5 = mysqli_num_rows($res5);
                        ?>
                        <h1><?php echo $count5; ?></h1>
                        <br />
                        <h2>Users</h2>
                    </div>

                    <div class="col-md-5 col-lg-5 col-sm-12 box">
                        <?php
                        $sql6 = "SELECT * FROM tb_enroll";
                        $res6 = mysqli_query($conn, $sql6);
                        $count6 = mysqli_num_rows($res6);
                        ?>
                        <h1><?php echo $count6; ?></h1>
                        <br />
                        <h2>Enroll</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include "partical-layout/foot.php";
?>