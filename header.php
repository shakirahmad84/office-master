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
   
   <?php wp_head(); ?>
</head>

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