<!doctype html>
<html <?php language_attributes(); ?>>

<head>

   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   <!-- Favicon and touch icons -->
   <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/ico/favicon.ico">
   <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/ico/apple-touch-icon-144-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo esc_url(get_template_directory_uri()); ?>assets/ico/apple-touch-icon-114-precomposed.png">
   <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/ico/apple-touch-icon-72-precomposed.png">
   <link rel="apple-touch-icon-precomposed" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<?php wp_head(); ?>

<body>

   <!-- Header -->

   <nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
      <div class="container">

         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand wow fadeInDownBig" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slider/Office.png" width="100" alt="Office"></a>
         </div>

         <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
         <?php wp_nav_menu(array(
            'theme_location' =>  'primary-menu',
            'fallback_cb'    =>  'office_master_fallback_menu',
            'container'      =>  '',
            'menu_class'     =>  'nav navbar-nav pull-right'
         )); ?>
         </div>
      </div>
   </nav>

   <!-- End Header -->


   <!-- Begin #carousel-section -->
   <section id="carousel-section" class="section-global-wrapper">
      <div class="container-fluid-kamn">
         <div class="row">
            <div id="carousel-1" class="carousel slide">

               <!-- Indicators -->
               <ol class="carousel-indicators visible-lg">
                  <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-1" data-slide-to="1"></li>
                  <li data-target="#carousel-1" data-slide-to="2"></li>
               </ol>

               <!-- Wrapper for slides -->
               <div class="carousel-inner">
                  <!-- Begin Slide 1 -->
                  <div class="item active">
                     <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slider/slide2.jpg" height="400" alt="">
                     <div class="carousel-caption">
                        <h3 class="carousel-title hidden-xs">Office BOOTSTRAP TEMPLATE</h3>
                        <p class="carousel-body">RESPONSIVE \ MULTI PAGE</p>
                     </div>
                  </div>
                  <!-- End Slide 1 -->

                  <!-- Begin Slide 2 -->
                  <div class="item">
                     <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slider/slide4.jpg" height="400" alt="">
                     <div class="carousel-caption">
                        <h3 class="carousel-title hidden-xs">EASY TO CUSTOMIZE</h3>
                        <p class="carousel-body">BEAUTIFUL \ CLEAN \ MINIMAL</p>
                     </div>
                  </div>
                  <!-- End Slide 2 -->

                  <!-- Begin Slide 3 -->
                  <div class="item">
                     <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slider/slide2.jpg" height="400" alt="">
                     <div class="carousel-caption">
                        <h3 class="carousel-title hidden-xs">MULTI-PURPOSE TEMPLATE</h3>
                        <p class="carousel-body">PORTFOLIO \ CORPORATE \ CREATIVE</p>
                     </div>
                  </div>
                  <!-- End Slide 3 -->
               </div>

               <!-- Controls -->
               <a class="left carousel-control" href="#carousel-1" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
               <a class="right carousel-control" href="#carousel-1" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
            </div>
         </div>
      </div>
   </section>
   <!-- End #carousel-section -->


   <!-- Begin #services-section -->
   <section id="services" class="services-section section-global-wrapper">
      <div class="container">
         <div class="row">
            <div class="services-header">
               <h3 class="services-header-title">Our Mission</h3>
               <p class="services-header-body"><em> Things we provide in Office </em> </p>
               <hr>
            </div>
         </div>

         <!-- Begin Services Row 1 -->
         <div class="row services-row services-row-head services-row-1">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                  <p class="services-icon"><span class="fa fa-android fa-5x"></span></p>
                  <h4 class="services-title">Android</h4>
                  <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                  <p class="services-more"><a href="#">Find Out More</a></p>
               </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class="services-group wow animated zoomIn" data-wow-offset="40">
                  <p class="services-icon"><i class="fa fa-apple fa-5x"></i></p>
                  <h4 class="services-title">Apple</h4>
                  <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                  <p class="services-more"><a href="#">Find Out More</a></p>
               </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class="services-group wow animated fadeInRight" data-wow-offset="40">
                  <p class="services-icon"><i class="fa fa-thumbs-o-up fa-5x"></i></p>
                  <h4 class="services-title">EASY TO USE</h4>
                  <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                  <p class="services-more"><a href="#">Find Out More</a></p>
               </div>
            </div>
         </div>
         <!-- End Serivces Row 1 -->

         <!-- Begin Services Row 2 -->
         <div class="row services-row services-row-tail services-row-2">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class="services-group wow animated fadeInLeft" data-wow-offset="40">
                  <p class="services-icon"><span class="fa fa-windows fa-5x"></span></p>
                  <h4 class="services-title">Windows</h4>
                  <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                  <p class="services-more"><a href="#">Find Out More</a></p>
               </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class="services-group wow animated zoomIn" data-wow-offset="40">
                  <p class="services-icon"><i class="fa fa-eye fa-5x"></i></p>
                  <h4 class="services-title">RETINA READY</h4>
                  <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                  <p class="services-more"><a href="#">Find Out More</a></p>
               </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class="services-group wow animated fadeInRight" data-wow-offset="40">
                  <p class="services-icon"><i class="fa fa-cube fa-5x"></i></p>
                  <h4 class="services-title">Cubic</h4>
                  <p class="services-body">Cras interdum placerat libero vel tempor. Curabitur gravida iaculis erat quis dignissim.</p>
                  <p class="services-more"><a href="#">Find Out More</a></p>
               </div>
            </div>
         </div>
         <!-- End Serivces Row 2 -->

      </div>
   </section>
   <!-- End #services-section -->


   <!-- Footer -->
   <footer>
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <h3><i class="fa fa-map-marker"></i> Contact:</h3>
               <p class="footer-contact">
                  Via Ludovisi 39-45, Rome, 54267, Italy<br> Phone: 1.800.245.356 Fax: 1.800.245.357<br> Email: hello@LawOffice.org<br>
               </p>
            </div>
            <div class="col-md-4">
               <h3><i class="fa fa-external-link"></i> Links</h3>
               <p> <a href="#"> About ( Who we are )</a></p>
               <p> <a href="#"> Services ( What we do )</a></p>
               <p> <a href="#"> Contact ( Feel free to contact )</a></p>
               <p> <a href="#"> Blog ( Write to us )</a></p>
               <p> <a href="#"> Team ( Meet the Team )</a></p>
            </div>
            <div class="col-md-4">
               <h3><i class="fa fa-heart"></i> Socialize</h3>
               <div id="social-icons">
                  <a href="#" class="btn-group google-plus">
                        <i class="fa fa-google-plus"></i>
                    </a>
                  <a href="#" class="btn-group linkedin">
                        <i class="fa fa-linkedin-square"></i>
                    </a>
                  <a href="#" class="btn-group twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                  <a href="#" class="btn-group facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
               </div>
            </div>
         </div>
      </div>
   </footer>


   <div class="copyright text center">
      <p>&copy; Copyright 2014, <a href="#">Your Website Link</a>. Theme by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
   </div>
   
   <?php wp_footer(); ?>
</body>

</html>
