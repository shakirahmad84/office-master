<?php get_header(); ?>

<?php
   $ebit_post = NULL;
   $ebit_post = new WP_Query(array(
      'post_type'      => 'page'
   ));

   if($ebit_post->have_posts()){
      while($ebit_post->have_posts()){
      $ebit_post->the_post();
      if(get_the_ID()==30){
         $page_thumb = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'full');
      ?>
   <div class="row container-kamn">
      <img src="<?php echo $page_thumb['0']; ?>" width="100%" class="blog-post" alt="Feature-img" align="right">
   </div>
   <?php
      }
   }
   }else{
      echo "Page image not set";
   } 
   wp_reset_postdata();
   ?>

      <!-- End Header -->


      <!-- Main Container -->
      <div id="banners"></div>
      <div class="container">
         <div class="row">

            <div class="col-md-9">

               <?php 
                  if(have_posts()): while(have_posts()): the_post(); 
                  $post_icon_class = get_post_meta( get_the_ID(), '_office-master_post_icon_class', true );
               ?>
               <div class="blog-post">
                  <h1 class="blog-title">
                     <i class="fa <?php echo $post_icon_class; ?>"></i>
                     <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h1>
                  <br>
                  <?php the_post_thumbnail('post-img'); ?>
                  <br>
                  <?php the_excerpt(); ?>
                  <div>
                     <span class="badge">Posted <?php echo get_the_date('Y-m-d H:i:s'); ?></span>
                     <div class="pull-right">
                        <?php the_tags('<span class="label label-default">', '</span><span class="label label-primary">', '</span>'); ?>
                     </div>
                  </div>
               </div>
               <hr>

               <?php 
                  endwhile;
                     the_posts_pagination(array(
                        'prev_text'           =>  '&laquo;',
                        'next_text'           =>  '&raquo;',
                        'mid_size'            =>  3,
                        'screen_reader_text'  =>  ' '
                     )); 
                  endif; 
               ?>

            </div>

            <div class="col-md-3">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h3 class="panel-title"><strong>Sign in </strong></h3>
                  </div>
                  <div class="panel-body">
                     <form role="form" action="<?php echo site_url(); ?>/wp-login.php" method="POST">
                        <div class="form-group">
                           <label for="exampleInputEmail1">Username or Email</label>
                           <input type="text" class="form-control" style="border-radius:0px" id="exampleInputEmail1" placeholder="Enter email" name="log">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword1">Password <a href="<?php echo site_url(); ?>/wp-login.php?action=lostpassword">(forgot password)</a></label>
                           <input type="password" class="form-control" style="border-radius:0px" id="exampleInputPassword1" placeholder="Password" name="pwd">
                        </div>
                        <input type="hidden" name="redirect_to" value="<?php echo site_url(); ?>">
                        <button type="submit" class="btn btn-sm btn-default" name="wp_submit">Sign in</button>
                     </form>
                  </div>
               </div>

               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

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
                           <?php the_post_thumbnail('sidebar-slide-img'); ?>
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
                  <ol class="carousel-indicators">
                     <?php for($i=0; $i<$x; $i++){?>
                        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>" class="<?php if($i==0){echo 'active';} ?>"></li>
                     <?php } ?>
                  </ol>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
               </div>
            </div>
         </div>
      </div>

      <!--End Main Container -->


      <?php get_footer(); ?>
