<?php
/**
* Template Name: Success Stories template
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
					<div class="col-md-6">
						<?php echo the_post_thumbnail('large', ['class'=>'img-responsive about_feature_img storypg_feature_img']); ?>
						<div class="common-about-summary success-summary">
							<?php  echo $about_summary; ?>
						</div>
					</div>
					<div class="col-md-6 about_img_funct">
						<h1 class="about-title"><?php echo the_title(); ?></h1>
						<div class="content-block"><?php the_content(); ?></div>
					</div>
				</div>
				<?php

			endwhile;

			?>
			<div class="three-box-wrapper clear-both">
				<?php echo get_post_meta($post->ID, 'vision_mission_values', true); ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>
