<?php 
/*
Template Name: About Page
*/
get_header(); ?>


    <!-- Main Container -->

<?php
   if(have_posts()): while(have_posts()): the_post();
   $page_thumb = wp_get_attachment_image_src(get_post_thumbnail_id( get_the_ID() ), 'full');
   $group_meta_data = get_post_meta( get_the_ID(), '_office-master_about_group_meta_field', true )
?>

   <div class="row container-kamn">
      <img src="<?php echo $page_thumb['0']; ?>" width="100%" class="blog-post" alt="Feature-img" align="right">
   </div>

   <?php
   endwhile; endif; 
?>

    <div id="banners"></div>
    <div class="container">   
        <div class="row">
           
            <div class="side-left col-sm-4 col-md-4">

            <?php foreach($group_meta_data as $single){ ?>

               <h3 class="lead"><?php echo $single['_office-master_heading']; ?></h3><hr>

               <p><?php echo $single['_office-master_about_description']; ?></p>

            <?php if(is_array($single['_office-master_hash_link'])){                                    
               foreach( $single['_office-master_hash_link'] as $key=>$child_single){ ?>
                 
                  <a href="<?php echo $child_single; ?>"><?php echo $single['_office-master_hash_link_title'][$key]; ?></a><br>

            <?php } } } ?>
                
            </div>
            
            <div class="col-sm-8 col-md-8">
               <?php if(have_posts()): while(have_posts()): the_post(); ?>
                  <?php the_content(); ?>
               <?php endwhile; endif; ?>
            </div>  
            
        </div>    
    </div>  

    <!--End Main Container -->

   <?php get_footer(); ?>