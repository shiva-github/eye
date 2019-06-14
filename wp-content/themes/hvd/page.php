<?php



get_header(); ?>



<div class="container content-wrapper" role="main">
	<div class="row">
		<div class="col-xl-12 mainpage">
			<?php 
				while (have_posts()) : the_post(); 
					?>
					<h1 class="about-title"><?php the_title(); ?></h1>
					<p><?php the_content(); ?></p>
					<?php

				endwhile;
			?>
		</div>
	</div>
</div>



<?php get_footer(); ?>
