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
//     'object_types'  => array( 'slider', 'service', 'page' ),
     'object_types'  => array( 'slider' ),
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
   
   
   // Team Metabox
   $team_member = new_cmb2_box( array(
     'id'            => 'team_metabox',
     'title'         => __( 'Team Metabox', 'office_master' ),
     'object_types'  => array( 'team' ),
   ) );
   
   $team_member->add_field( array(
     'name'       => __( 'Team Member Designation', 'office_master' ),
     'desc'       => __( 'Write here your team member designation', 'office_master' ),
     'id'         => $pref . 'team_designation',
     'type'       => 'text',
   ) );
   
   $team_member->add_field( array(
     'name'       => __( 'BlockQuote Color', 'office_master' ),
     'desc'       => __( 'Write here your blockquote color class name', 'office_master' ),
     'id'         => $pref . 'team_blockquote',
     'type'       => 'text',
   ) );
   
   $team_member->add_field( array(
     'name'       => __( 'Animation Type', 'office_master' ),
     'desc'       => __( 'Write here your animation class name', 'office_master' ),
     'id'         => $pref . 'team_animation',
     'type'       => 'text',
   ) );
   
   // Post Metabox
   $post_metabox = new_cmb2_box( array(
     'id'            => 'post_metabox',
     'title'         => __( 'Post Metabox', 'office_master' ),
     'object_types'  => array( 'post' ),
   ) );
   
   $post_metabox->add_field( array(
     'name'       => __( 'Post Icon', 'office_master' ),
     'desc'       => __( 'Write here your post icon class name', 'office_master' ),
     'id'         => $pref . 'post_icon_class',
     'type'       => 'text',
   ) );
   
   // About Page Sidebar Metabox
   $about_page_group = new_cmb2_box( array(
     'id'            => 'about_group_metabox',
     'title'         => __( 'About Page Metabox', 'office_master' ),
     'object_types'  => array( 'page' ),
      'show_on'      => array(
         'key' => 'ID',
         'value' => 19
        )
   ) );
   
   $about_group_para = $about_page_group->add_field( array(
     'name'       => __( 'Groupable Field', 'office_master' ),
     'id'         => $pref . 'about_group_meta_field',
     'type'       => 'group',
   ) );
   
   $about_page_group->add_group_field($about_group_para, array(
     'name'       => __( 'Heading', 'office_master' ),
     'id'         => $pref . 'heading',
     'type'       => 'text',
   ) );
   
   $about_page_group->add_group_field($about_group_para, array(
     'name'       => __( 'About Description', 'office_master' ),
     'id'         => $pref . 'about_description',
     'type'       => 'text',
   ) );
   
   $about_page_group->add_group_field($about_group_para, array(
     'name'       => __( 'A tag hash link', 'office_master' ),
     'id'         => $pref . 'hash_link',
     'type'       => 'text',
      'repeatable'=> true
   ) );
   
   $about_page_group->add_group_field($about_group_para, array(
     'name'       => __( 'A tag hash link title', 'office_master' ),
     'id'         => $pref . 'hash_link_title',
     'type'       => 'text',
      'repeatable'=> true
   ) );
   
   
   
   
   
   
}
