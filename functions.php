<?php

// Theme Support
function office_master_theme_support(){
   add_theme_support('title-tag');
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