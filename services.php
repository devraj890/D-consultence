     <?php
        $page = 'services';
        require "Layouts/common_header.php";
        ?>
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

     <?php require "Layouts/footer.php" ?>