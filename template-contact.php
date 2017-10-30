<?php 
/*
Template Name: Contact Page
*/
get_header(); ?>

<!-- Main Container -->
<div class="container-fluid-kamn">
   <div class="row">
      <div>
         <iframe width="100%" height="450px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $office_master['map_url']; ?>"></iframe>
         <br />
      </div>
      <div class="col-lg-4 col-lg-offset-1">
         <h4><?php echo $office_master['contact_text_title']; ?></h4>
         <?php echo $office_master['contact_text']; ?>
         
         <p class="lead"><?php echo $office_master['social_heading']; ?></p>
         <hr>
         
         <?php
         if(is_array($office_master['contact_social_links'])){
            foreach($office_master['contact_social_links'] as $singleSocial){
         ?>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
               <a href="<?php echo $singleSocial['url']; ?>">
                  <img src="<?php echo $singleSocial['image']; ?>" alt="">
               </a> <?php echo $singleSocial['title']; ?>
            </div>
         <?php
            }}
         ?>
         
         <br>
      </div>
      <div class="col-lg-5">
         <div class="feedback-form">
            <div id="contact-response"></div>
            <form action="http://templates.designorbital.com/baleen/contact.php" method="post" id="contact-form">
               <fieldset>
                  <div class="form-group form-group-fullname">
                     <label class="control-label" for="fullname">NAME *</label>
                     <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Enter Your Name">
                  </div>
                  <div class="form-group form-group-email">
                     <label class="control-label" for="email">E-MAIL *</label>
                     <input type="text" class="form-control" name="email" id="email" placeholder="Enter Your E-Mail">
                  </div>
                  <div class="form-group form-group-message">
                     <label class="control-label" for="message">MESSAGE *</label>
                     <textarea class="form-control" name="message" id="message" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
               </fieldset>
            </form>
         </div>
      </div>
   </div>
</div>
<!--End Main Container -->

<?php get_footer(); ?>