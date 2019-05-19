<?php
/**
* Template Name: Contact template
*
* @package WordPress
* @subpackage fire
* @since The Last Fire
*/

get_header(); 

?>


<div class="container" role="main">
	<div class="row">
		<div class="col-xl-12 mainpage">

			<?php 
			$about_summary = get_post_meta($post->ID, 'page_description', true);
			while (have_posts()) : the_post(); 
				?>
				<?php echo the_post_thumbnail(); ?>
				<div class="row">
					<div class="col-md-6">
						<div class="common-about-summary">
							<?php  echo $about_summary; ?>
						</div>
						<div class="contact-form-box pl-5 pr-5 pt-3 pb-3">
							<div class="contact-getintouch">Get in Touch</div>
						</div>
					</div>
					<div class="col-md-6">
						<h1 class="about-title"><?php echo the_title(); ?></h1>
						<div class="content-block">
							<?php //the_content(); ?>
							<div class="w-100 left-panel-news contact-news-overrite">
								<div class="left-content-news pl-5 pt-5 pb-3 pr-3">
									<div class="contact-title">
										Call Us
									</div>
									<div class="contact-data mb-3">
										020 2697 4000
									</div>
									<div class="contact-title">
										Email Us
									</div>
									<div class="contact-data mb-3">
										desaieyehospital@hvdeh.org
									</div>
									<div class="contact-title">
										Working Hours
									</div>
									<div class="contact-data mb-3">
										Mon to Fri - 8:00 am to 4:00 pm<br>
										Mon to Fri - 5:00 pm to 7:00 pm<br>
										Saturday : 8:00 am to 2:00 pm<br>
										Sunday : Closed
									</div>
									<div class="contact-title">
										Address
									</div>
									<div class="contact-data mb-3">
										93, Tarwade Vasti, Mohammadwadi Road, Hadapsar,<br>
										Pune MH 411060 India
									</div>
									<div class="text-left mt-2 mb-4">
										<a class="ml-2 learn-more" href="https://goo.gl/maps/t4mLj1e31M4DvLyMA" target="_blank" title="Directions from Google Maps">Get Directions</a>
									</div>
								</div>
							</div>
							<div class="w-100 right-panel-news contact-news-overrite clear-both">
								<div class="w-100">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121096.0950483577!2d73.85372553314384!3d18.472197134732827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2ea1aba6400fd%3A0xa49f42bd3170840f!2sPBMA&#39;s+H.+V.+Desai+Eye+Hospital!5e0!3m2!1sen!2sin!4v1558290394328!5m2!1sen!2sin" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<?php

			endwhile;

			?>
			
		</div>
	</div>
</div>


<?php get_footer(); ?>
