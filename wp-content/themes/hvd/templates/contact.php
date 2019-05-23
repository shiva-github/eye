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
				
				<div class="row">
					<div class="col-md-6 pr-3">
						<?php echo the_post_thumbnail('large', array('class' => 'img-responsive about_feature_img')); ?>
						<div class="common-about-summary clear-both">
							<?php  echo $about_summary; ?>
						</div>
						<div class="contact-form-box pl-5 pr-5 pt-5 pb-5">
							<div class="contact-getintouch">Get in Touch</div>
							<div class="form-row">
								<div class="mt-3 form-group w-50 pr-3">
									
									<input type="text" id="materialContactFormName" placeholder="Name" class="form-control border-top-0 border-right-0 border-left-0">
								</div>


								<div class="mt-3 form-group w-50 pl-3">
									
									<input type="email" id="materialContactFormEmail" placeholder="E-mail" class="form-control border-top-0 border-right-0 border-left-0">
								</div>

								<div class="mt-3 form-group col-12">
									<label for="materialContactFormMessage">Message</label>
									<textarea id="materialContactFormMessage" class="form-control md-textarea" rows="4"></textarea>
								</div>
								<div class="col-12">   
									<button class="btn btn-info learn-more" type="submit">Submit</button>
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-6">
						<h1 class="about-title"><?php echo the_title(); ?></h1>
						<div class="content-block">
							<?php the_content(); ?>
							
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
