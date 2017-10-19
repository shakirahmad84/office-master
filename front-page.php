<?php get_header(); ?>


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
                     $slider_caption = get_post_meta(get_the_ID(), '_office-master_slider_caption', true);
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
               <?php foreach($service_icon as $single_icon){ ?>
                  <p class="services-icon"><span class="fa <?php echo $single_icon; ?> fa-5x"></span></p>
                  <?php } ?>
                  
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


<?php get_footer(); ?>