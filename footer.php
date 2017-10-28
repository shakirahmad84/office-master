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
            <p> <a href="#"> About ( Who we are )</a></p>
            <p> <a href="#"> Services ( What we do )</a></p>
            <p> <a href="#"> Contact ( Feel free to contact )</a></p>
            <p> <a href="#"> Blog ( Write to us )</a></p>
            <p> <a href="#"> Team ( Meet the Team )</a></p>
         </div>

         <div class="col-md-4">
            <h3><i class="fa <?php echo $office_master['col_three_icon']; ?>"></i>
               <?php echo $office_master['col_three_title']; ?>
            </h3>
            <div id="social-icons">
               <a href="#" class="btn-group google-plus">
                     <i class="fa fa-google-plus"></i>
                  </a>
               <a href="#" class="btn-group linkedin">
                     <i class="fa fa-linkedin-square"></i>
                  </a>
               <a href="#" class="btn-group twitter">
                     <i class="fa fa-twitter"></i>
                  </a>
               <a href="#" class="btn-group facebook">
                     <i class="fa fa-facebook"></i>
                  </a>
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
