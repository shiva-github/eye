<?php
/**
* Template Name: Homepage
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
			<div class="row">

				<div class="col-md-5 offset-md-1">
					<div class="home-text">
						<div class="home-title">
							<span>EXCELLENCE</span>
							<span style="font-weight: 100;">IN QUALITY</span>
							<span>EYE CARE</span>
							<span>WITH CONCERN</span>
						</div>
						<div class="home-desc">
							<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.</span>
							<span>Ut enim ad minim veniam, quis nostrud exercitation
							ullamco laboris nisi ut aliquip ex ea commodo consequat</span>
						</div>

					</div>
				</div>
				<div class="col-md-6">
					<img class="home-main-img" src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/01.png">
				</div>
			</div>
			<?php 
			while (have_posts()) : the_post(); 
				?>
				<div class="content-block"><?php the_content(); ?></div>
				<?php

			endwhile;
			$image = get_field('state_of_art_image');
			?>

			<div class="state-of-art-wrapper clear-both">
				
				<div class="state-art-img"><img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"></div>
				<div class="state-art-title"><?php echo get_post_meta($post->ID, 'state_of_art_title', true); ?></div>
				<div class="state-art-desc">
					<?php echo get_post_meta($post->ID, 'state_of_art_description', true); ?>
				</div>
			</div>
			<div class="facilities-wrapper clear-both">
				<h2 class="home-facilities-title">Our Facilities</h2>
				<img src="../../../source/circle_01.png" class="facility-circle" />
				


				<?php
				$args = array(
					'post_type'   => 'facilities',
					'post_status' => 'publish',
					'orderby' => 'date',
					'order' => 'ASC',
				);
				
				$facilities = new WP_Query( $args );
				if( $facilities->have_posts() ) :
					?>
					<div class="tab-wrapper clear-both">

						<!-- slider for mobile start-->
						<div class="swiper-container d-md-none">
							<div class="swiper-wrapper">
								<!--First Slide-->
								<?php
							$counter = 0;
							while( $facilities->have_posts() ):
								$facilities->the_post();
								$nameofpost = preg_replace('/[^ \w-]/', '', strtolower(get_the_title()));
								$nameofpost = str_replace(' ', '-', $nameofpost);
								?>
								<div class="swiper-slide">
									<div class="box">
										
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="facility-img" />
										
										<div class="box-title">
											<?php
											echo get_the_title();
											?>

										</div>
										<div class="box-content">
											<?php
											echo get_the_excerpt();
											?>
										</div>
										<div class="learn-more-wrapper">
											<a class="learn-more" href="<?php echo get_the_permalink();?>">
												Learn More
											</a>
										</div>
									</div>
								</div>

								<?php
								$counter++;
							endwhile;
							$counter = 0;
							wp_reset_postdata();
							?>	
							</div>
						</div>

						<!-- slider for mobile end -->



						<div class="nav flex-column home-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<?php
							$counter = 0;
							while( $facilities->have_posts() ) :
								$facilities->the_post();
								$nameofpost = preg_replace('/[^ \w-]/', '', strtolower(get_the_title()));
								$nameofpost = str_replace(' ', '-', $nameofpost);
								?>
								<a class="nav-link <?php echo ($counter == 0)?'active':'';?>" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-<?php echo $nameofpost;?>" role="tab" aria-controls="v-pills-<?php echo $nameofpost;?>" aria-selected="true">
									<?php
									echo get_the_title();
									?>
								</a>
								<?php
								$counter++;
							endwhile;
							$counter = 0;
							wp_reset_postdata();
							?>
						</div>


						<div class="tab-content" id="v-pills-tabContent">
							<?php
							$counter = 0;
							while( $facilities->have_posts() ):
								$facilities->the_post();
								$nameofpost = preg_replace('/[^ \w-]/', '', strtolower(get_the_title()));
								$nameofpost = str_replace(' ', '-', $nameofpost);
								?>
								<div class="tab-pane fade show <?php echo ($counter == 0)?'active':'';?>" id="v-pills-<?php echo $nameofpost; ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo $nameofpost;?>-tab">
									<div class="box">
										
										<?php echo get_the_post_thumbnail(); ?>
										
										<div class="box-title">
											<?php
											echo get_the_title();
											?>

										</div>
										<div class="box-content">
											<?php
											echo get_the_excerpt();
											?>
										</div>
										<div class="learn-more-wrapper">
											<a class="learn-more" href="<?php echo get_the_permalink();?>">
												Learn More
											</a>
										</div>
									</div>
								</div>

								<?php
								$counter++;
							endwhile;
							$counter = 0;
							wp_reset_postdata();
							?>

							
						</div>
						
						<?php
					else :
						esc_html_e( 'No Facilities available!', 'fire' );
					endif;
					?>
				</div>
			</div>
			<div class="pioneer-wrapper clear-both">
				<h2 class="pioneer-title">
					The Pioneers
				</h2>
				<?php
				$name1_pioneer = get_post_meta($post->ID, 'pioneer_name_1', true);
				$name2_pioneer = get_post_meta($post->ID, 'pioneer_name_2', true);


				$name1_pioneer_id_t = preg_replace('/[^ \w-]/', '', strtolower($name1_pioneer));
				$name1_pioneer_id = str_replace(' ', '-', $name1_pioneer_id_t);
				$name2_pioneer_id_t = preg_replace('/[^ \w-]/', '', strtolower($name2_pioneer));
				$name2_pioneer_id = str_replace(' ', '-', $name2_pioneer_id_t);

				$link1_pioneer = get_post_meta($post->ID, 'pioneer_link_1', true);
				$link2_pioneer = get_post_meta($post->ID, 'pioneer_link_2', true);

				$image1_pioneer = get_field('pioneer_img_1');
				$image2_pioneer = get_field('pioneer_img_2');
				
				?>
				<div class="pioneer-content clear-both">
					<div class="pioneer-box">
						<div class="img-box-pioneer">
							<img class="img-responsive img-pioneer" src="<?php echo $image1_pioneer['url']; ?>" alt="<?php echo $image1_pioneer['alt']; ?>" style="width: 100%;" />
						</div>


						<div class="pioneer-name-link">
							<svg width="100%" height="27">
								<defs>
									<linearGradient id="grad1-<?php echo $name1_pioneer_id; ?>" x1="0%" y1="0%" x2="100%" y2="0%">
										<stop offset="0%" style="stop-color:#c55055;stop-opacity:1" />
										<stop offset="50%" style="stop-color:#8f6a8d;stop-opacity:1" />
										<stop offset="100%" style="stop-color:#314b8c;stop-opacity:1" />
									</linearGradient>

									<clipPath id="cut-off-bottom-<?php echo $name1_pioneer_id; ?>">
										<path d="M 0 0 q 230 50 460 0" class="path-change" stroke="url(#grad1-<?php echo $name1_pioneer_id; ?>)" stroke-width="5" fill="none" />
									</clipPath>
								</defs>
								<rect height="50" width="100%" fill="#ddd" clip-path="url(#cut-off-bottom-<?php echo $name1_pioneer_id; ?>)" />
							</svg>
							<div class="pioneer-name">
								<?php echo $name1_pioneer; ?>
							</div>
							<div class="pioneer-link">
								<span><a class="learn-more" href="<?php echo $link1_pioneer['url']; ?>" title="<?php echo $link1_pioneer['title']; ?>">Learn</a></span>
							</div>
						</div>
					</div>


					<div class="pioneer-box">
						<div class="img-box-pioneer">
							<img class="img-responsive img-pioneer" src="<?php echo $image2_pioneer['url']; ?>" alt="<?php echo $image2_pioneer['alt']; ?>" style="width: 100%;" />
						</div>
						<div class="pioneer-name-link">
							<svg width="100%" height="27">
								<defs>
									<linearGradient id="grad1-<?php echo $name2_pioneer_id; ?>" x1="0%" y1="0%" x2="100%" y2="0%">
										<stop offset="0%" style="stop-color:#c55055;stop-opacity:1" />
										<stop offset="50%" style="stop-color:#8f6a8d;stop-opacity:1" />
										<stop offset="100%" style="stop-color:#314b8c;stop-opacity:1" />
									</linearGradient>

									<clipPath id="cut-off-bottom-<?php echo $name2_pioneer_id; ?>">
										<path d="M 0 0 q 230 50 460 0" class="path-change" stroke="url(#grad1-<?php echo $name2_pioneer_id; ?>)" stroke-width="5" fill="none" />
									</clipPath>
								</defs>
								<rect height="50" width="100%" fill="#ddd" clip-path="url(#cut-off-bottom-<?php echo $name2_pioneer_id; ?>)" />
							</svg>
							<div class="pioneer-name">
								<?php echo $name2_pioneer; ?>
							</div>
							<div class="pioneer-link">
								<span><a class="learn-more" href="<?php echo $link2_pioneer['url']; ?>" title="<?php echo $link2_pioneer['title']; ?>">Learn</a></span>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="award-wrapper clear-both">
				<h2 class="award-title">
					Awards & Accreditations
				</h2>
				<?php echo get_post_meta($post->ID, 'awards', true); ?>
				<div class="awards-view clear-both text-center">
					<button class="learn-more">View all</button>
				</div>
			</div>
			<div class="ophthalmologists-wrapper clear-both">
				<div class="row">
					<div class="col-md-6">
						<?php echo get_post_meta($post->ID, 'creating_ophthalmologists_description', true); ?>
					</div>
					<div class="col-md-6">
						<div class="ophthalmologists-img">
							<?php 
							$opth_image = get_field('creating_ophthalmologists_image');
							?>
							<img class="img-responsive" src="<?php echo $opth_image['url']; ?>" alt="<?php echo $opth_image['alt']; ?>">
						</div>
					</div>
				</div>
			</div>


			<div class="success-wrapper clear-both">
				<img src="/source/circle_02.png" class="circle" />
				<h2 class="success-title">
					Success Stories
				</h2>

				<?php echo get_post_meta($post->ID, 'success_story', true); ?>
				<div class="success-view text-center clear-both">
					<button class="learn-more">View all</button>
				</div>
			</div>
			



			<div class="latestnews-wrapper clear-both">
				<h2 class="news-title">
					Latest News
				</h2>

				<div class="news-content">
					<?php
					$args = array(
						'post_type'   => 'news',
						'post_status' => 'publish',
						'orderby' => 'meta_value',
						'order' => 'DESC',
					);
					
					$news = new WP_Query( $args );
					if( $news->have_posts() ) :
						?>
						<div class="row">
							<div class="col-md-9 left-panel-news">
								<div class="left-content-news">
									<div class="news-heading">
										<?php 
										$news->the_post();
										echo get_the_title();
										?>
									</div>
									<div class="news-date">
										<?php 
										echo get_the_date();
										?>
									</div>
									<div class="news-desc">
										<?php 
										echo get_the_excerpt();
										?>
									</div>
									<div class="text-left mt-2 mb-4 pl-5 btn-lm-news">
										<a class="ml-2 learn-more" href="<?php echo get_the_permalink();?>" title="<?php echo get_the_title();?>">Learn More</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 right-panel-news">
								<div class="news-img">

									<?php 
									$news->the_post();
									if( null != get_the_post_thumbnail_url() ):
										?>
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="News Image"  />
										<?php
									endif;
									?>
								</div>
								<div class="news-heading mt-2">
									<?php 
									echo get_the_title();
									?>
								</div>
								<div class="news-date">
									<?php 
									echo get_the_date();
									?>
								</div>
								<div class="news-desc">
									<?php 
									echo get_the_excerpt();
									?>
								</div>
								<div class="text-left mt-2 mb-4 pl-2 btn-lm-news">
									<a class="ml-2 learn-more" href="<?php echo get_the_permalink();?>" title="<?php echo get_the_title();?>">Learn More</a>
								</div>
							</div>
						</div>
						<?php 	wp_reset_postdata();
					endif; 
					?>
				</div>
				
			</div>













		</div>
	</div>
</div>


<?php get_footer(); ?>
