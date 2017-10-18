<?php

if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {
  require_once  __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once  __DIR__ . '/CMB2/init.php';
}


add_action('cmb2_admin_init', 'office_master_cmb2');
function office_master_cmb2(){
   
   $pref = '_office-master_';
   
   
   // Service Metabox
   $service_item = new_cmb2_box( array(
     'id'            => 'service_metabox',
     'title'         => __( 'Service Metabox', 'office_master' ),
     'object_types'  => array( 'service' ),
   ) );
   
   $service_item->add_field( array(
     'name'       => __( 'Service Icon', 'office_master' ),
     'desc'       => __( 'Write here your service icon\'s font awesome name', 'office_master' ),
     'id'         => $pref . 'service_icon',
     'type'       => 'text',
     'repeatable'=> TRUE,
   ) );
   
   $service_item->add_field( array(
     'name'       => __( 'Service Description', 'office_master' ),
     'desc'       => __( 'Write here your service description', 'office_master' ),
     'id'         => $pref . 'service_desc',
     'type'       => 'textarea',
   ) );
   
   $service_item->add_field( array(
     'name'       => __( 'Service Link URL', 'office_master' ),
     'desc'       => __( 'Write here your service link url', 'office_master' ),
     'id'         => $pref . 'service_link',
     'type'       => 'text',
   ) );
   
   $service_item->add_field( array(
     'name'       => __( 'Service Link Title', 'office_master' ),
     'desc'       => __( 'Write here your service link title', 'office_master' ),
     'id'         => $pref . 'service_link_title',
     'type'       => 'text',
   ) );
   
   $service_item->add_field( array(
     'name'       => __( 'Service Animation Type', 'office_master' ),
     'desc'       => __( 'Write here your service animation class name from animate.css', 'office_master' ),
     'id'         => $pref . 'animation_type',
     'type'       => 'text',
   ) );
   
   
   // Slider Metabox
   $slider_item = new_cmb2_box( array(
     'id'            => 'slider_metabox',
     'title'         => __( 'Slider Metabox', 'office_master' ),
     'object_types'  => array( 'slider', 'service', 'page' ),
   ) );
   
   $slider_item->add_field( array(
     'name'       => __( 'Slider Caption', 'office_master' ),
     'desc'       => __( 'Write here your slider caption', 'office_master' ),
     'id'         => $pref . 'slider_caption',
     'type'       => 'text',
   ) );
   
   
   // Slider Metabox
   $special_page = new_cmb2_box( array(
     'id'            => 'special_metabox',
     'title'         => __( 'Special Metabox', 'office_master' ),
     'object_types'  => array( 'page' ),
     'show_on'       => array(
         'key'   => 'id',
         'value' => '21'
     ),
   ) );
   
   $special_page->add_field( array(
     'name'       => __( 'Special Meta Caption', 'office_master' ),
     'desc'       => __( 'Write here your special caption', 'office_master' ),
     'id'         => $pref . 'slider_caption',
     'type'       => 'text',
   ) );
   
}
