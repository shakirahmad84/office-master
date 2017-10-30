<?php global $office_master; ?>

<!-- Footer -->
<footer>
   <div class="container">
      <div class="row">

         <div class="col-md-4">
            <h3><i class="fa <?php echo $office_master['col_one_icon']; ?>"></i>
               <?php echo $office_master['col_one_title']; ?>
            </h3>
            <?php echo $office_master['col_one_txt']; ?>
         </div>

         <div class="col-md-4">
            <h3><i class="fa <?php echo $office_master['col_two_icon']; ?>"></i>
               <?php echo $office_master['col_two_title']; ?>
            </h3>
            <?php 
            if(is_array($office_master['col_two_links'])){
               foreach($office_master['col_two_links'] as $singleValue ){
                  echo '<p> <a href="'.$singleValue['url'].'">'.$singleValue['title'].'</a></p>';
               }
            }
            ?>
         </div>

         <div class="col-md-4">
            <h3><i class="fa <?php echo $office_master['col_three_icon']; ?>"></i>
               <?php echo $office_master['col_three_title']; ?>
            </h3>
            <div id="social-icons">
              
            <?php 
            if(is_array($office_master['col_three_links'])){
               foreach($office_master['col_three_links'] as $social_value){
                  echo '<a href="'.$social_value['url'].'" class="btn-group google-plus"><i class="fa '.$social_value['title'].'"></i></a>';
               }
            }
            ?>
            
            </div>
         </div>
      </div>
   </div>
</footer>


<div class="copyright text center">
   <?php global $office_master; echo $office_master['copyright_text']; ?>
</div>

<?php wp_footer(); ?>
</body>

</html>
