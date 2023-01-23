    <?php
    include "connection/connect.php";
    error_reporting(E_ALL ^ E_NOTICE);

    $page = 'contact';
    require "Layouts/common_header.php";

    ?>

    <?php
    $nameerror = "";
    $phoneerror = "";
    $emailerror = "";
    $commenterror = "";

    if (isset($_POST['submit'])) {
        if (empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['email']) || empty($_POST['comment'])) {
            $nameerror = "Name is Required..";
            $phoneerror = "Phone is Required..";
            $emailerror = "Email is Required..";
            $commenterror = "Comment is Required..";
        } else {
            $name = test_data($_POST['name']);
            $phone = test_data($_POST['phone']);
            $email = test_data($_POST['email']);
            $comment = test_data($_POST['comment']);

            if (!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^\d{10}$/", $phone) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $nameerror = "Only Letter and White Space allowed..";
                $phoneerror = "Only number with 10 digit Required..";
                $emailerror = "Invalid email format..";
    ?>
                <script>
                    alert(" <?php echo $emailerror; ?> ");
                </script>
    <?php
            } else {
                $query = "insert into tb_contact (name,phone,email,comment) values ('$name', '$phone', '$email', '$comment')";
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
    }

    function test_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <!--section open for contact  -->
    <section>
        <div class="container pl-0 pr-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="c-full">
                        <h4>Contact Us</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container contact">
            <div class="row">
                <div class="col-md-3 c-side">
                    <div class="contact-info">
                        <i class="fas fa-envelope fa-4x mt-5 mb-5 ml-2"></i>
                        <h2>Contact Us</h2>
                        <h4>We would love to hear from you !</h4>
                    </div>
                </div>
                <div class="col-md-9 c-fom">
                    <div class="contact-form">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="contact_form" onsubmit="return validateForm()" method="post">
                            <div class="form-group" id="name">
                                <label class="control-label col-sm-2" for="name">* Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                                    <strong> <span class="formerror"> </span></strong>
                                </div>
                            </div>
                            <div class="form-group" id="phone">
                                <label class="control-label col-sm-2" for="Phone">* Phone:</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" placeholder="Enter Phone Number" name="phone">
                                    <strong> <span class="formerror"> </span></strong>
                                </div>
                            </div>
                            <div class="form-group" id="email">
                                <label class="control-label col-sm-2" for="email">* Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" placeholder="Enter email" name="email">
                                    <strong> <span class="formerror"> </span></strong>
                                </div>
                            </div>
                            <div class="form-group" id="comment">
                                <label class="control-label col-sm-2" for="comment">* Comment:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" name="comment"></textarea>
                                    <strong> <span class="formerror"> </span></strong>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="row c-details">
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="c-phn">
                        <h4>Talk To Us</h4>
                        <i class="fa-solid fa-phone pl-5"></i>
                        <a href="tel:+919876543210">
                            +91 9876543210
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12">
                    <div class="c-phn">
                        <h4>Mail Us</h4>
                        <i class="fa-solid fa-envelope"></i>
                        <a href="mailto:info.dconsult@gmail.com">
                            info.dconsult@gmail.com
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12">
                    <div class="c-phn">
                        <h4>Location </h4>
                        <i class="fa-solid fa-location-dot pl-5"></i>
                        <a href="#">
                            3/2, Nagziri Ujjain, Madhya Pradesh 456789.
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pl-0 pr-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.7403925576455!2d75.80907831444448!3d23.143162617619094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396373e6ad80308d%3A0x37663fdd74e2c201!2sD-Consultancy!5e0!3m2!1sen!2sin!4v1663690981632!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--section close  -->
    <?php require "Layouts/footer.php" ?>

    <script src="js/contact_validation.js"></script>