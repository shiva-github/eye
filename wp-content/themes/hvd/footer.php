



<!-- The Modal -->
<div class="modal" id="bioModal">
    <div class="modal-dialog" >
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">            
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <div class="modal-title clear-both">
                <img src="" class="img" style="width: 100px;height:100px;border: 1px solid #ddd; margin-right: 15px; margin-bottom: 15px;float: left; filter: grayscale(1); border-radius: 50%;" />
                <div class="name"></div>
                <div class="designation"></div>
            </div>
            <div class="content"></div>
        </div>

        <!-- Modal footer -->
   <!--  <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div> -->

</div>
</div>
</div>



<div class="sticky-container" id="sticky-sidebar"> 
    <ul class="sticky">
        <li>
            <img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/Book-an-appointment.png" width="24" height="24">
            <img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/book-an-appointment_blue_24dp.png" width="24" height="24">

            <p><a href="<?php echo site_url();?>/book-an-appointment/" target="_blank">Book an Appointment</a></p>
        </li>
        <li>
            <img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/Doctors.png" width="24" height="24">
            <img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/doctors_blue_24dp.png" width="24" height="24">
            <p><a href="<?php echo site_url();?>/doctors/">Doctor</a></p>
        </li>
        <li>
            <img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/Donate.png" width="24" height="24">
            <img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/donate_blue_24dp.png" width="24" height="24">
            <p><a href="https://donate.hvdeh.org/donate" target="_blank">Donate</a></p>
        </li>
    </ul>
</div>

<footer>
    <div class="footer-wrapper">
     <div class="container footer-container clear-both">
      <?php
      wp_nav_menu();
      ?>
  </div>
  <div class="container clear-both ">
    <div class="newsletter-wrapper">
        <?php if ( is_active_sidebar( 'footer_widget' ) ) : ?>
            <div id="footer-widget" class="widget">
                <?php dynamic_sidebar( 'footer_widget' ); ?>
            </div><!-- #footer-widget-area -->
        <?php endif; ?>
        <span class="social-footer">
            <a href="https://www.facebook.com/hvdeh.org/" onclick="return ! window.open(this.href);" title="Facebook Social Media"><img src="<?php echo site_url().'/wp-content/themes/hvd/assets/images/facebook_24dp.png'; ?>" alt="Facebook" width="24" /></a>
            <a href="#" onclick="return ! window.open(this.href);" title="Twitter Social Media"> <img src="<?php echo site_url().'/wp-content/themes/hvd/assets/images/twitter_24dp.png'; ?>" alt="" width="24" /></a>
            <a href="#" onclick="return ! window.open(this.href);" title="LinkedIn Social Media"><img src="<?php echo site_url().'/wp-content/themes/hvd/assets/images/linkedin_24dp.png'; ?>" alt="" width="24" /></a>
        </span>
    </div>
</div>
<div class="copyright">
    <div class="container clear-both">
        <span>Copyright ©2019 H. V. Desai Eye Hospital</span><span><a href="#">Disclaimer</a></span>
    </div>
</div>
</div>
</footer>

<?php wp_footer(); ?>
<script type="text/javascript" async defer>
    (function($) {
        $(".search-header img.toggle").click(function(event){
            $('.search-wrapper').slideToggle();
        });
        $(".search-button").click(function(event){
            var inputbox = $('#header-search-box');
            if("" == inputbox.val() ) {
                event.preventDefault();
            }
        });
        $(".navbar-toggler").click(function(){
            $(this).toggleClass('active');
        });

        $(".data-circle").click(function() {

            $('#bioModal .modal-title .name').text($(this).data('name'));
            $('#bioModal .modal-title .designation').text($(this).data('designation'));
            $('#bioModal .modal-body .content').html($(this).children('.data-html-desc').html());
            $('#bioModal .modal-title .img').attr('src', $(this).data('image'));
        });

    })(jQuery);
</script>
</body>
</html>
