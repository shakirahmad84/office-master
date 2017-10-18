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

               <!-- Wrapper for slides -->
               <div class="carousel-inner">
                  <?php
                  $ebit_post = NULL;
                  $ebit_post = new WP_Query(array(
                     'post_type'      => 'slider',
                     'posts_per_page' =>  -1
                  ));
                  
                  if($ebit_post->have_posts()){
                     $x=0;
                     while($ebit_post->have_posts()){
                     $x++;
                     $ebit_post->the_post();
                     $slider_caption = get_post_meta(get_the_ID(), 'slider_caption', true);
                  ?>

                  <!-- Begin Slide Item -->
                  <div class="item <?php if($x==1){echo 'active';} ?>">
                     <?php the_post_thumbnail('slide-img'); ?>
                     <div class="carousel-caption">
                        <h3 class="carousel-title hidden-xs"><?php the_title(); ?></h3>
                        <p class="carousel-body"><?php echo $slider_caption; ?></p>
                     </div>
                  </div>
                  <!-- End Slide Item -->

                  <?php 
                  }
                  }else{
                     echo "Slider not set";
                  } 
                  wp_reset_postdata();
                  ?>
               </div>
               
               <!-- Indicators -->
               <ol class="carousel-indicators visible-lg">
               <?php
               for($i=0; $i<$x; $i++){
               ?>
               <li data-target="#carousel-1" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){echo 'active';} ?>"></li>
               <?php                  
               }   
               ?>
                  

               </ol>

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
           
            <?php
            $ebit_post = NULL;
            $ebit_post = new WP_Query(array(
               'post_type'      => 'service',
               'posts_per_page' =>  -1,
               'order'          =>  'ASC'
            ));

            if($ebit_post->have_posts()){
               while($ebit_post->have_posts()){
               $ebit_post->the_post();
               $service_icon = get_post_meta(get_the_ID(), '_office-master_service_icon', true);
               $service_desc = get_post_meta(get_the_ID(), '_office-master_service_desc', true);
               $service_link = get_post_meta(get_the_ID(), '_office-master_service_link', true);
               $service_link_title = get_post_meta(get_the_ID(), '_office-master_service_link_title', true);
               $animation_type = get_post_meta(get_the_ID(), '_office-master_animation_type', true);
            ?>

            <!-- Begin Service Single Item -->
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
               <div class="services-group wow animated <?php echo $animation_type; ?>" data-wow-offset="40">
                  <p class="services-icon"><span class="fa <?php echo $service_icon; ?> fa-5x"></span></p>
                  <h4 class="services-title"><?php the_title(); ?></h4>
                  <p class="services-body"><?php echo $service_desc; ?></p>
                  <p class="services-more"><a href="<?php echo $service_link; ?>"><?php echo $service_link_title; ?></a></p>
               </div>
            </div>
            <!-- End Service Single Item -->

            <?php 
            }
            }else{
               echo "Service not set";
            } 
            wp_reset_postdata();
            ?>

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
