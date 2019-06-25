<?php



get_header(); ?>


<div class="container content-wrapper">
	<div class="row">
		<div class="col-md-12 mainpage">
			<p>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->
			</p>
			<?php if ( have_posts() ) : ?>
				<?php 
				while (have_posts()) : the_post(); 
					?>
					<h2><a href="<?php echo the_permalink();?>" title="<?php echo the_title();?>"><?php echo the_title(); ?></a></h2>
					<p><?php echo the_excerpt(); ?></p>
					<?php

				endwhile;
				?>
			<?php 
		else:
			echo "<h2>No results found.</h2>";
			echo "<p>Please try to search something else.</p>";
			get_search_form();
		endif; ?>
		</div>
		<!-- <div class="col-md-3"><?php //get_sidebar(); ?></div> -->
	</div>
</div>


<?php get_footer(); ?>
