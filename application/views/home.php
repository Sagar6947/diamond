<?php include 'includes/header-link.php' ?>
<div id="page" class="full-page">
   <!-- site header html start  -->
   <?php include 'includes/header.php' ?>
   <!-- site header html end  -->
   <main id="content" class="site-main">
      <!-- home banner section html start -->
      <section class="home-banner">
         <div class="container">
            <div class="row">
               <div class="col-md-6 d-flex flex-wrap align-items-center">
                  <div class="banner-content">
                     <h2 class="banner-title">We broker only the best

                        loans for you
                     </h2>
                     <div class="banner-text">
                        <p>Low interest rates, instant approval and minimal
                           documentation</p>
                     </div>
                     <div class="banner-button">
                        <a href="" class="button-round orange-bg">Contact Us</a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">

                  <div class="contact-from-wrap">
                     <h4>Enquire Now</h4>
                     <p>Our expert finance advisors find better solutions for all
                        your financial needs</p>
                     <form class="contact-from">
                        <p>
                           <input type="text" name="name" placeholder="Name" required>
                        </p>
                        <p>
                           <input type="email" name="phone" placeholder="Phone">
                        </p>
                        <p>
                           <input type="text" name="email" placeholder="Email">
                        </p>
                        <p>
                           <input type="text" name="number" placeholder="Select a loan amount">
                        </p>

                        <p>
                           <input type="submit" name="submit" class="orange-bg" value="Send Inquiry">
                        </p>
                     </form>
                  </div>

               </div>
            </div>
         </div>
         <div class="banner-pattern" style="background-image: url(assets/images/banner-pattern1.png);"></div>
      </section>
      <!-- home banner section html end -->
      <!-- home about section html start -->
      <section class="home-about my_gray_bg">
         <div class="container white-bg about_container">
            <div class="row">
               <div class="col-lg-6 ">
                  <h2 class="about_heading">Finance your dream
                     projects </h2>
                  <p class="about_para">We provide flexible and hassle free lending solutions for every
                     ambitious development undertaking
                  </p>

                  <div class="grid_box">
                     <div class="box">
                        <i aria-hidden="true" class="icon icon-idea"></i>
                        <h5>Construction
                           Finance
                        </h5>
                     </div>
                     <div class="box">
                        <i aria-hidden="true" class="icon icon-idea"></i>
                        <h5>Housing Development
                           Capital
                        </h5>
                     </div>
                     <div class="box">
                        <i aria-hidden="true" class="icon icon-idea"></i>
                        <h5>Small and Large

                           Project Funding

                        </h5>
                     </div>
                     <div class="box">
                        <i aria-hidden="true" class="icon icon-idea"></i>
                        <h5>Commercial
                           Property Investment
                        </h5>
                     </div>
                  </div>

                  <a href="" class="button-round orange-bg">Learn More</a>

               </div>
               <div class="col-lg-6 ">
                  <div class="about_image_box">
                     <img src="<?= base_url() ?>assets/img/about_image.jpg" alt="">
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- home about section html end -->
      <!-- home service section html start -->
      <section class="home-service ptb my_gray_bg">
         <div class="container">
            <div class="section-head text-center">
               <div class="row">
                  <div class="col-lg-8 offset-lg-2">

                     <h2 class="section-title">Hear from our happy clientele </h2>
                     <p>We look forward to you becoming one of our many satisfied customers</p>
                  </div>
               </div>
            </div>
            <div class="service-inner">
               <div class="testi_image">
                  <img src="<?= base_url() ?>assets/img/testi_image.jpg" alt="" class="radius-10">
               </div>
               <div class="testi_content radius-10">
                     <p>“Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy
                        text ever since the 1500s, when an unknown printer took a galley of
                        type and scrambled it to make a type specimen book”</p>
                     <h3>Amelia Noah
                     </h3>
                     <p>-Account Manager</p>

                     <div class="nav_icons">
                     <i class="fa fa-arrow-left" aria-hidden="true"></i>
                     <i class="fa fa-arrow-right" aria-hidden="true"></i>
                     </div>
                  </div>
            </div>
         </div>
      </section>
     
      <!-- home blog section html end -->
   </main>
   <!-- site footer html start  -->
   <?php include 'includes/footer.php' ?>


</div>

<?php include 'includes/footer-link.php' ?>