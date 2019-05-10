
<div class="sticky-container" id="sticky-sidebar"> 
    <ul class="sticky">
        <li>
            <img src="wp-content/themes/hvd/assets/images/Book-an-appointment.png" width="32" height="32">
            <p>Book an Appointment</p>
        </li>
        <li>
            <img src="wp-content/themes/hvd/assets/images/Doctors.png" width="32" height="32">
            <p>Doctor</p>
        </li>
        <li>
            <img src="wp-content/themes/hvd/assets/images/Donate.png" width="32" height="32">
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
                <a href="#"><img src="<?php echo site_url().'/wp-content/themes/hvd/assets/images/facebook.png'; ?>" alt="Facebook" width="30" /></a>
                <a href="#"><img src="<?php echo site_url().'/wp-content/themes/hvd/assets/images/twitter.png'; ?>" alt="" width="30" /></a>
                <a href="#"><img src="<?php echo site_url().'/wp-content/themes/hvd/assets/images/linkedin.png'; ?>" alt="" width="30" /></a>
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