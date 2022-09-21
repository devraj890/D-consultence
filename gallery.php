     <?php
        $page = 'gallery';
        require "Layouts/common_header.php";
        ?>
     <!--section open for gallery-->
     <section class="section-first">
         <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="g-head">
                         <h2>Gallery</h2>
                     </div>
                 </div>
             </div>
             <div class="tz-gallery">
                 <div class="row">
                     <div class="col-md-4 col-lg-4 col-sm-4">
                         <div class="full">
                             <a class="lightbox" href="image/hands.jpg">
                                 <img class="img-responsive" src="image/hands.jpg" alt="image1">
                             </a>
                         </div>
                     </div>
                     <div class="col-md-4 col-lg-4 col-sm-4">
                         <div class="full">
                             <a class="lightbox" href="image/businesswoman.jpg">
                                 <img class="img-responsive" src="image/businesswoman.jpg" alt="image2">
                             </a>
                         </div>
                     </div>
                     <div class="col-md-4 col-lg-4 col-sm-4">
                         <div class="full">
                             <a class="lightbox" href="image/consulting.jpg">
                                 <img class="img-responsive" src="image/consulting.jpg" alt="image3">
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-4 col-lg-4 col-sm-4">
                         <div class="full">
                             <a class="lightbox" href="image/harvard-202138_1920.jpg">
                                 <img class="img-responsive" src="image/harvard-202138_1920.jpg" alt="image1">
                             </a>
                         </div>
                     </div>
                     <div class="col-md-4 col-lg-4 col-sm-4">
                         <div class="full">
                             <a class="lightbox" href="image/harvard1.jpg">
                                 <img class="img-responsive" src="image/harvard1.jpg" alt="image2">
                             </a>
                         </div>
                     </div>
                     <div class="col-md-4 col-lg-4 col-sm-4">
                         <div class="full">
                             <a class="lightbox" href="image/harvard2.jpg">
                                 <img class="img-responsive" src="image/harvard2.jpg" alt="image3">
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-4 col-lg-4 col-sm-4">
                         <div class="full">
                             <a class="lightbox" href="image/stanford-3906631_1920.jpg">
                                 <img class="img-responsive" src="image/stanford-3906631_1920.jpg" alt="image1">
                             </a>
                         </div>
                     </div>
                     <div class="col-md-4 col-lg-4 col-sm-4">
                         <div class="full">
                             <a class="lightbox" href="image/stanford1.jpg">
                                 <img class="img-responsive" src="image/stanford1.jpg" alt="image2">
                             </a>
                         </div>
                     </div>
                     <div class="col-md-4 col-lg-4 col-sm-4">
                         <div class="full">
                             <a class="lightbox" href="image/stanford2.jpg">
                                 <img class="img-responsive" src="image/stanford2.jpg" alt="image3">
                             </a>
                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-md-4 col-lg-4 col-sm-4">
                         <div class="full">
                             <a class="lightbox" href="image/toronto-3112508_1920.jpg">
                                 <img class="img-responsive" src="image/toronto-3112508_1920.jpg" alt="image1">
                             </a>
                         </div>
                     </div>
                     <div class="col-md-4 col-lg-4 col-sm-4">
                         <div class="full">
                             <a class="lightbox" href="image/toronto1.jpeg">
                                 <img class="img-responsive" src="image/toronto1.jpeg" alt="image2">
                             </a>
                         </div>
                     </div>
                     <div class="col-md-4 col-lg-4 col-sm-4">
                         <div class="full">
                             <a class="lightbox" href="image/toronto2.jpg">
                                 <img class="img-responsive" src="image/toronto2.jpg" alt="image3">
                             </a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!--section close-->


     <?php require "Layouts/footer.php" ?>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js" integrity="sha512-PV06IaXTp8hZuG4UOUteNKvz/xmGuKzBRc/lggLAoPQkbzmHZGN8zmWe2FPu4nXpAm9CpQmfod87s1SNHVdYLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

     <script>
         baguetteBox.run('.tz-gallery')
     </script>