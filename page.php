<?php get_header(); ?>

<section class="page_area">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
         <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="page_content">
               <h2 class="page_title"><?php the_title(); ?></h2>
               <div class="page-content">
                  <?php the_content(); ?>
               </div>
            </div>
         <?php endwhile; endif; ?>
         </div>
      </div>
   </div>
</section>

<?php get_footer(); ?>