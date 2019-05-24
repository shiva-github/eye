
<div class="sticky-container" id="sticky-sidebar"> 
    <ul class="sticky">
        <li>
            <img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/Book-an-appointment.png" width="32" height="32">
            <img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/book-an-appointment_blue_24dp.png" width="32" height="32">

            <p>Book an Appointment</p>
        </li>
        <li>
            <img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/Doctors.png" width="32" height="32">
            <img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/doctors_blue_24dp.png" width="32" height="32">
            <p>Doctor</p>
        </li>
        <li>
            <img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/Donate.png" width="32" height="32">
            <img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/donate_blue_24dp.png" width="32" height="32">
            <p>Donate</p>
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
</body>
</html>