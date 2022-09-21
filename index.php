    <?php
    $page = 'home';
    // require "Layouts/header.php"; 
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>D Consulting</title>

        <link rel="stylesheet" href="css/all.min.css">
        <!--link for font awesome 6.1..-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <!--link for bootstrap 4..-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-grid.min.css">
        <link rel="stylesheet" href="css/bootstrap-grid.css">
        <link rel="stylesheet" href="style.css">

        <!--all bs Scripts-->
        <script src="js/jquery.min.js"></script>
        <!--link for jquery..-->
        <script src="js/jquery.slim.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <!--link for bootstrap 4 js..-->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/popper-utils.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/all.min.js"></script>
        <!--link for font awesome 6.1..-->
    </head>

    <body>
        <!--header open-->
        <header class="top-header">
            <div class="container-fluid sticky-top">
                <div class="row head">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <div class="toolbar-social">
                            <a href="#">
                                <i class="fa-brands fa-facebook fa-lg ml-1 mr-1"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-instagram fa-lg ml-1 mr-1"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-linkedin fa-lg ml-1 mr-1"></i>
                            </a>
                            <a href="#">
                                <i class="fa-brands fa-square-twitter fa-lg ml-1 mr-1"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="toolbar-contact align-center">
                            <a href="mailto:info.dconsult@gmail.com">
                                <i class="fa-solid fa-envelope"></i>
                                info.dconsult@gmail.com
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <div class="toolbar-contact">
                            <a href="tel:+919786543210 ">
                                <i class="fa-solid fa-phone"></i>
                                +91 9876543210
                            </a>
                        </div>
                    </div>


                    <div class="col-md-2 col-lg-2 col-sm-12">
                        <a class="btn btn-primary btn-sm border-dark" href="admin/admin_login.php" role="button">
                            <i class="fa-solid fa-user"></i>
                            Login
                        </a>
                    </div>
                </div>
            </div>
            <!--nav open-->
            <nav class="navbar navbar-expand-sm navbar-dark sticky-top nav-bg">
                <div class="container-fluid">
                    <a class="navbar-brand nav-logo" href="index.php">
                        <img class="img-thumbnail" src="image/logo.PNG" alt="logo">
                    </a>
                    <button class="navbar-toggler navbar" type="button" data-toggle="collapse" data-target="#mynav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end mr-5" id="mynav">
                        <ul class="navbar-nav text-center ml-5">
                            <li class="nav-item active ml-5">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item ml-5">
                                <a class="nav-link" href="services.php"> Services</a>
                            </li>
                            <li class="nav-item ml-5">
                                <a class="nav-link" href="enroll.php">Enroll</a>
                            </li>
                            <li class="nav-item ml-5">
                                <a class="nav-link" href="gallery.php">Gallery</a>
                            </li>
                            <li class="nav-item ml-5">
                                <a class="nav-link" href="about.php">About</a>
                            </li>
                            <li class="nav-item ml-5">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                        </ul>

                        <!-- <a class="btn btn-primary ml-4" href="#" role="button">
                            <i class="fa-solid fa-user"></i>
                            Log-in
                        </a>
                        <a class="btn btn-primary ml-4" href="#" role="button">
                            <i class="fa-solid fa-user"></i>
                            Sign-up
                        </a> -->
                    </div>
                </div>
            </nav>

            <!--nav close-->
            <div class="container text-center text-white haderset">
                <h1>Welcome To D CONSULTING</h1>
                <p>D Consulting is a registered educational and job consultancy working to promote international education and help students to join the best Universities and colleges in the world and work with abroad in IT Industry.</p>
                <a class="btn btn-primary" href="about.php" role="button">
                    Read More
                </a>
            </div>

        </header>
        <!--header close-->
        <!--section open for services-->

        <section>
            <div class="container">
                <div class="row">
                    <div class="co-md-12 col-sm-12">
                        <div class="container text-center pt-5 pb-5 sec-head">
                            <h1>Our Services</h1>
                            <p>Get real in this world</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="full image-card">
                            <a href="study_abroad.php">
                                <img class="img-responsive" src="image/studyabroad.jpg" alt="studyabroad">
                                <h4>Study Abroad</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="full image-card">
                            <a href="work_abroad.php">
                                <img class="img-responsive" src="image/workabroad.jpg" alt="workabroad">
                                <h4>Work Abroad</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section close-->


        <!--section open for about-->

        <section class="sec-fifth">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full ">
                            <div class="sec-head3">
                                <h2>About</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="full image-card ab-im">
                            <img class="img-responsive" src="image/logo.PNG" alt="logo">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="full image-card sec-abt">
                            <h4>D CONSULTING</h4>
                            <p>D Consulting is a registered educational consultancy based in Ethiopia working to promote international education and help students to join the best Universities and colleges in the world and work for abroad.

                                The purpose of our effort is to encourage students to fulfill their educational ambitions in several disciplines by guiding them to select internationally recognized universities and colleges. With our consultancy students can join some of the best universities and colleges in USA and Canada.

                                We are aware that the choice of the students to study overseas is a valuable decision of their life since it opens career prospects and opportunities to experience new society, culture and life styles. The experienced teams of our staff are devoted to provide the student a friendly, cooperative, and efficient service which helps the students to have complete process easily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--section close-->

        <!--section open for study abroad-->
        <section>
            <div class="container sec-second">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div class="sec-2-im">
                            <img class="img-responsive" src="image/software-developer.jpg" alt="software">
                        </div>
                        <div class="full text_emp">
                            " Consult with us to benefit from studying abroad "
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 sec-lp2">
                        <div class="full">
                            <div class="sec-head2">
                                <h2>Why Study Abroad?</h2>
                            </div>
                            <div class="full">
                                <p>One of the main reasons to study abroad is to immerse yourself into high valued education system with a variety of faculties and attain a worldwide recognized degrees. By studying abroad you will also get to see new perspectives and cultures and really embrace another country. From new languages, foods and traditions to traditional music and games, there will be a lot to learn and explore

                                    Career wise you will develop the ability to communicate across multiple language barriers in a range of different scenarios, you will have the opportunity to create a global network of contacts. Meeting students from across the globe can create opportunities to work for.

                                    Studying abroad will also help boost your self-confidence as you overcome challenges, navigate new environments and develop your resilience to new situations. Lastly you can kickstart your career, taking advantage of fast-growing industries and some of the multinational companies.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section close-->

        <!--section open for requirement of study-->
        <section class="sec-third">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="sec-head3">
                                <h2>Requirements for Study Abroad</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row sec-3-bg pt-3 pb-3">
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="full image-card">
                            <img class="img-responsive" src="image/passport-indian.jpg" alt="passport">
                            <h4>Passport</h4>
                            <p>A passport is an official travel document issued by a government that contains a given person's identity.Valid Renewed passport by Government. </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="full image-card">
                            <img class="img-responsive" src="image/marksheet.jpg" alt="marksheet">
                            <h4>Marksheet</h4>
                            <p>Depending on your choice of study differnet documnets may be required: High school transcripts, EGSEC result, Student copy, degrees or diplomas.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12">
                        <div class="full image-card">
                            <img class="img-responsive" src="image/birth-certificate.jpg" alt="birth Certificate">
                            <h4>Birth Certificate</h4>
                            <p>A birth certificate is a vital record that documents the birth of a person. Valid birth certificate issued by the Government.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section close-->

        <!--section open for enrollment program-->
        <section class="sec-fourth">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <div class="sec-head3">
                                <h2>Enrollment Program</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--section carousel-->
            <div class="container">
                <div id="Enroll_program" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li class="active" data-target="#Enroll_program" data-slide-to="0" aria-current="location"></li>
                        <li data-target="#Enroll_program" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="full image-card">
                                        <a href="enroll.php">
                                            <img class="img-responsive" src="image/diploma.jpg" alt="diploma">
                                            <h4 class="img_title">Diploma</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="full image-card">
                                        <a href="enroll.php">
                                            <img class="img-responsive" src="image/under_graduate.jpg" alt="#">
                                            <h4 class="img_title">Undergraduate</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="full image-card">
                                        <a href="enroll.php">
                                            <img class="img-responsive" src="image/postgraduate.jpg" alt="#">
                                            <h4 class="img_title">Post Graduate</h4>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="full image-card">
                                        <a href="enroll.php">
                                            <img class="img-responsive" src="image/phd.jpg" alt="#">
                                            <h4 class="img_title">PHD and Research</h4>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#Enroll_program" data-slide="prev" role="button">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#Enroll_program" data-slide="next" role="button">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!--section carousel-->
        </section>
        <!--section close-->

        <!--footer open-->
        <footer>
            <div class="f-full f-foot">
                <div class="row">
                    <div class="col-md-5 col-lg-5 col-sm-12 nav-f-s">
                        <div class="f-img-card f-abt f-abt-n">
                            <img class="img-responsive" src="image/logo.PNG" alt="logo">
                            <h3 class="text-center">About Consultancy</h3>
                            <p> The purpose of our effort is to encourage students to fulfill their educational ambitions in several disciplines by guiding them to select internationally recognized universities and colleges. With our consultancy students can join some of the best universities and colleges in USA and Canada.</p>
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2 col-sm-12 nav-f-s">
                        <div class="f-abt-n">
                            <h4>Quick Link</h4>
                            <ul class="f-nav">
                                <li>
                                    <a href="index.php">
                                        <i class="fas fa-angle-right"></i>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="services.php">
                                        <i class="fas fa-angle-right"></i>
                                        Services
                                    </a>
                                </li>
                                <li>
                                    <a href="enroll.php">
                                        <i class="fas fa-angle-right"></i>
                                        Enroll
                                    </a>
                                </li>
                                <li>
                                    <a href="gallery.php">
                                        <i class="fas fa-angle-right"></i>
                                        Gallery
                                    </a>
                                </li>
                                <li>
                                    <a href="about.php">
                                        <i class="fas fa-angle-right"></i>
                                        About
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.php">
                                        <i class="fas fa-angle-right"></i>
                                        Contact
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.php">
                                        <i class="fas fa-angle-right"></i>
                                        Give us feedback
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-2 col-lg-2 col-sm-12 f-map mt-3">
                        <!-- <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" frameborder="0" style="border:0"></iframe> -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3668.7403925576455!2d75.80907831444448!3d23.143162617619094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396373e6ad80308d%3A0x37663fdd74e2c201!2sD-Consultancy!5e0!3m2!1sen!2sin!4v1663690981632!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-md-3 col-lg-3 col-sm-12 nav-f-s">
                        <div class="f-abt-n">
                            <h4>Contact</h4>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <div class="f-toolbar-contact">
                                        <a href="tel:+919786543210 ">
                                            <i class="fa-solid fa-phone"></i>
                                            +91 9876543210
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12">
                                    <div class="f-toolbar-contact">
                                        <a href="mailto:info.dconsult@gmail.com">
                                            <i class="fa-solid fa-envelope"></i>
                                            info.dconsult@gmail.com
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="f-toolbar-social">
                                <h3>Stay Connected</h3>
                                <a href="#">
                                    <i class="fa-brands fa-facebook fa-lg"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-square-instagram fa-lg ml-1 mr-1"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-linkedin fa-lg ml-1 mr-1"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-brands fa-square-twitter fa-lg ml-1 mr-1"></i>
                                </a>
                            </div>

                            <div class="f-address">
                                <h3>Office</h3>
                                <a href="#">
                                    <i class="fas fa-location-dot"></i>
                                    3/2, Nagziri Ujjain, Madhya Pradesh 456789.
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="f-nm">
                        <p>Copyright © 2022, All rights reserved, by D Consulting.</p>
                        <p>Design By Farukh Khan</p>
                    </div>
                </div>
            </div>
        </footer>

        <!--Footer close-->
    </body>

    </html>