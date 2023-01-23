    <?php
    //hide warning of header
    ob_start();
    include "connection/connect.php";

    // session_start();
    //remove the session error
    error_reporting(E_ALL ^ E_NOTICE);
    if (!isset($_SESSION)) {
        session_start();
    } 
    $page = 'feedback';
    require "Layouts/common_header.php";
    ?>
    <?php
    
    // session_start();
    $user = $_SESSION['username'];
    if ($user == true) {
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $course = $_POST['course'];
            $country = $_POST['country'];
            $university = $_POST['university'];
            $comment = $_POST['comment'];

            $query = "INSERT INTO tb_feedback (name, course, country, university, message) VALUES ('$name', '$course', '$country', '$university', '$comment')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> Your entry has been submitted successfully!
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
    else
    {
        header('location:user_login.php');
    }
    ?>
  

    <section>
        <div class="container pl-0 pr-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="c-full">
                        <h4>Feedback Now</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="container contact">
            <div class="row">
                <div class="col-md-5 c-side">
                    <div class="contact-info">
                        <!-- <i class="fas fa-envelope fa-4x mt-5 mb-5 ml-2"></i> -->
                        <i class="fa-regular fa-comment fa-4x mt-5 mb-5 ml-2"></i>
                        <h2>Feedback</h2>
                        <h4>If You Satisfied our Services than feedback our Consultancy !</h4>
                    </div>
                </div>
                <div class="col-md-7 c-fom">
                    <div class="contact-form">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="feedback_form" onsubmit="return validateForm()" method="post">
                            <div class="form-group" id="name">
                                <label class="control-label" for="name">Name :</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Full Name" name="name">
                                <strong> <span class="formerror"> </span></strong>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="course">Course :</label>
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

                            <div class="form-group">
                                <label class="control-label" for="country">Country :</label>
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
                                </select>
                                <strong> <span class="formerror"> </span></strong>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="university">University :</label>
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
                                </select>
                                <strong> <span class="formerror"> </span></strong>
                            </div>

                            <div class="form-group" id="comment">
                                <label class="control-label" for="comment">Message :</label>
                                <textarea class="form-control" rows="5" name="comment"></textarea>
                                <strong> <span class="formerror"> </span></strong>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require "Layouts/footer.php";

    //hide warning of header
    ob_flush();
    
    ?>