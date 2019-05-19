<?php
/**
* Template Name: News and Events template
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
				while (have_posts()) : the_post(); 
					?>
			<h1 class="about-title mb-4"><?php echo the_title(); ?></h1>
					<?php

				endwhile;
			 ?>
			 <div class="clear-both">
			 	<div class="row">
			 <?php 
			 $args = array(
			 	'post_type'   => 'news',
			 	'post_status' => 'publish',
			 	'orderby' => 'meta_value',
			 	'order' => 'DESC',
			 );
			 $news = new WP_Query( $args );
				if( $news->have_posts() ) :
					$counter = 0;
					while( $news->have_posts() ):
						$news->the_post();
						if ( $counter == 0 ):
			 ?>
			
					<div class="col-md-12">
						<div class="feature-news-box">
							<div class="w-50 float-left">
								<div class="news-listing-title pl-5 pr-3">
									<?php echo the_title(); ?>
								</div>
								<div class="news-listing-date pl-5 pr-3 mt-1">
								<em><?php echo the_date(); ?></em>
								</div>
								<div class="feature-text pl-5">Featured News</div>
								<div class="w-100 clear-both pl-5 pr-3 mt-3 mb-3"><a href="<?php echo get_permalink(); ?>" class="learn-more">Read more</a></div>
							</div>
							<div class="news-listing-feature w-50  float-left">
								<?php //echo the_post_thumbnail(); ?>

								<?php 
					if( null != get_the_post_thumbnail_url() ):
						echo the_post_thumbnail('large', array('class'=>' w-100 ')); 
					else:
						?>
						<img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/download.jpg" alt="Default News Image" class="img-responsive" width="100%"/>
						<?php
					endif;

					?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="common-wrapper clear-both">
			 	<div class="row">
			<?php 
		else:
			?>
			<div class="col-md-4 box-container-news">
				<div class="news-listing-img mb-3">
					<?php 
					if( null != get_the_post_thumbnail_url() ):
						echo the_post_thumbnail('small', array('class'=>' w-100 ')); 
					else:
						?>
						<img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/download.jpg" alt="Default News Image" class="img-responsive" width="100%" />
						<?php
					endif;

					?>
				</div>
				<div class="news-listing-title">					
					<a href="<?php echo get_permalink(); ?>" class="news-link"><?php echo the_title(); ?></a>
				</div>
				<div class="news-listing-date mt-2">
					<em><?php echo the_date(); ?></em>
				</div>
			</div>
			<?php
		endif;
			$counter++;
				endwhile;
				wp_reset_postdata();
			endif;
			 ?>
			 </div>
			</div>
			<!-- end of post listing -->
		</div>
	</div>
</div>


<?php get_footer(); ?>
