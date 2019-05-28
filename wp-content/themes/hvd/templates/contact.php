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
						<?php 
						echo do_shortcode( '[contact-form-7 id="352" title="Contact form 1"]');
?>
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
