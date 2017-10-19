<?php

// Theme Support
function office_master_theme_support(){
   add_theme_support('title-tag');
   add_theme_support('post-thumbnails');
   add_image_size('slide-img', 1500, 500, true);
   add_image_size('team-img', 100, 80, true);
   add_image_size('post-img', 850, 490, true);
   
   register_nav_menus(array(
      'primary-menu'   => 'Primary Menu'
   ));
}
add_action('after_setup_theme', 'office_master_theme_support');

// Support CSS & JS
function office_master_css_js(){
   wp_enqueue_style('open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,300', NULL, 'v1.0', 'all');
   wp_enqueue_style('pt-sans', '//fonts.googleapis.com/css?family=PT+Sans', NULL, 'v1.0', 'all');
   wp_enqueue_style('Ralway', '//fonts.googleapis.com/css?family=Raleway', NULL, 'v1.0', 'all');
   
   wp_enqueue_style('Bootstrap', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.css');
   wp_enqueue_style('font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
   wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css');
   wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.min.css');
   wp_enqueue_style('main-style', get_stylesheet_uri());
   
   wp_enqueue_script('jquery');
   wp_enqueue_script('Bootstrap', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array('jquery'), NULL, true );
   wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.min.js', array('jquery'), NULL, true );
}
add_action('wp_enqueue_scripts', 'office_master_css_js');

// Footer Script
function footer_extra_script(){
   ?>
   <script>
      new WOW().init();
   </script>
   <?php
}
add_action('wp_footer', 'footer_extra_script', 30);


// Fallback Menu
function office_master_fallback_menu(){ ?>
<ul class="nav navbar-nav pull-right">
   <li class="active"><a href="">Home</a></li>
   <li><a href="">About</a></li>
   <li><a href="">Blog</a></li>
   <li><a href="">Team</a></li>
   <li><a href=""><span>Contact</span></a></li>
</ul>
<?php
}


// Slider
function office_master_custom_post(){
   
   // Slider Custom Post Register
   register_post_type('slider', array(
      'labels' => array(
         'name'         => 'Slider',
         'menu_name'    => 'Slider Menu',
         'all_items'    => 'All Sliders',
         'add_new'      => 'Add New Slide',
         'add_new_item' => 'Add new slide item'
      ),
      'public' => true,
      'supports' => array(
         'title', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes'
      )
   ));
   // Service Custom Post Register
   register_post_type('service', array(
      'labels' => array(
         'name'         => 'Service',
         'menu_name'    => 'Service Menu',
         'all_items'    => 'All Services',
         'add_new'      => 'Add New Service',
         'add_new_item' => 'Add new Service item'
      ),
      'public' => true,
      'supports' => array(
         'title', 'revisions', 'custom-fields', 'page-attributes'
      )
   ));
   // Service Custom Post Register
   register_post_type('team', array(
      'labels' => array(
         'name'         => 'Team',
         'menu_name'    => 'Team Menu',
         'all_items'    => 'All Team Member',
         'add_new'      => 'Add New Team Member',
         'add_new_item' => 'Add new Team Member'
      ),
      'public' => true,
      'supports' => array(
         'title', 'revisions', 'page-attributes', 'thumbnail'
      )
   ));
}
add_action('init', 'office_master_custom_post');


include_once 'inc/cmb2.php';