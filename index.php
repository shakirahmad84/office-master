<?php get_header(); ?>

   <?php
   $ebit_post = NULL;
   $ebit_post = new WP_Query(array(
      'post_type'      => 'page',
      'posts_per_page' =>  -1
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
               <i class="fa <?php echo $post_icon_class; ?>"></i> <?php the_title(); ?>
            </h1>
            <br>
            <?php the_post_thumbnail('post-img'); ?>
            <br>
            <?php the_excerpt(); ?>
            <div>
               <span class="badge">Posted <?php echo get_the_date('Y-m-d H:i:s'); ?></span>
               <div class="pull-right">
                 <?php the_tags('<span class="label label-default">', '</span><span class="label label-primary">', '</span>'); ?>
<!--
                  <span class="label label-success">blog</span>
                  <span class="label label-info">personal</span>
                  <span class="label label-warning">Warning</span>
                  <span class="label label-danger">Danger</span>
-->
               </div>
            </div>
         </div>
         <hr>

      <?php endwhile; endif; ?>



         <ul class="pagination">
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">2 <span class="sr-only"></span></a></li>
            <li><a href="#">3 <span class="sr-only"></span></a></li>
            <li><a href="#">4 <span class="sr-only"></span></a></li>
            <li><a href="#">5 <span class="sr-only"></span></a></li>
         </ul>
      </div>

      <div class="col-md-3">
         <div class="panel panel-default">
            <div class="panel-heading">
               <h3 class="panel-title"><strong>Sign in </strong></h3>
            </div>
            <div class="panel-body">
               <form role="form">
                  <div class="form-group">
                     <label for="exampleInputEmail1">Username or Email</label>
                     <input type="email" class="form-control" style="border-radius:0px" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                     <label for="exampleInputPassword1">Password <a href="/sessions/forgot_password">(forgot password)</a></label>
                     <input type="password" class="form-control" style="border-radius:0px" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-sm btn-default">Sign in</button>
               </form>
            </div>
         </div>

         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
               <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
               <li data-target="#carousel-example-generic" data-slide-to="1"></li>
               <li data-target="#carousel-example-generic" data-slide-to="2"></li>
               <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
               <div class="item active">
                  <img src="http://placehold.it/292/16a085/FFF&text=CSS3" alt="" class="img-responsive" />
               </div>
               <div class="item">
                  <img src="http://placehold.it/292/d35400/FFF&text=HTML5" alt="" class="img-responsive" />
               </div>
               <div class="item">
                  <img src="http://placehold.it/292/2980b9/FFF&text=RESPONSIVE" alt="" class="img-responsive" />
               </div>
               <div class="item">
                  <img src="http://placehold.it/292/8e44ad/FFF&text=BOOTSTRAP3" alt="" class="img-responsive" />
               </div>
            </div>
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
