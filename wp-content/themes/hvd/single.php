<?php

 wp_link_pages();

 
get_header(); ?>


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
					</div>
					<div class="col-md-6">
						<h1 class="about-title"><?php echo the_title(); ?></h1>
						<div class="content-block"><?php the_content(); ?></div>
						
					</div>
				</div>
				<?php

			endwhile;

			?>
			
		</div>
	</div>
</div>


<?php get_footer(); ?>
