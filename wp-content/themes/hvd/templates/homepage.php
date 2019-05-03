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
						<span>AND CONCERN</span>
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
					<img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/01.png">
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
				


				<?php
				$args = array(
					'post_type'   => 'facilities',
					'post_status' => 'publish',
					'orderby' => 'meta_value',
					'order' => 'ASC',
				);
				
				$facilities = new WP_Query( $args );
				if( $facilities->have_posts() ) :
					?>
					<div class="tab-wrapper clear-both">
						<div class="nav flex-column home-tabs" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<?php
							$counter = 0;
							while( $facilities->have_posts() ) :
								$facilities->the_post();
								?>
								<a class="nav-link <?php echo ($counter == 0)?'active':'';?>" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-<?php echo strtolower(get_the_title());?>" role="tab" aria-controls="v-pills-<?php echo strtolower(get_the_title());?>" aria-selected="true">
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
							?>
							<div class="tab-pane fade show <?php echo ($counter == 0)?'active':'';?>" id="v-pills-<?php echo strtolower(get_the_title());?>" role="tabpanel" aria-labelledby="v-pills-<?php echo strtolower(get_the_title());?>-tab">
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
			<div class="pioneer-wrapper clear-both">
				<div class="pioneer-title">
					The Pioneers
				</div>
				<div class="pioneer-content clear-both">
					<div class="pioneer-box">
						<div class="img-box-pioneer">
							<img class="img-responsive img-pioneer" src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/04_Late-Mr-Niranjan-Pandya.png"  style="width: 100%;" />
						</div>
						<div class="pioneer-name">
							<?php echo get_post_meta($post->ID, 'pioneer_name_1', true); ?>
						</div>
						<div class="pioneer-overlay">
							<div class="pioneer-name">
								<span>Late Mr. Tukaram Bamankar</span>
								<span><button class="learn-more">Learn</button></span>
							</div>
						</div>
					</div>


					<div class="pioneer-box">
						<div class="img-box-pioneer">
							<img class="img-responsive img-pioneer" src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/04_Late-Mr-Niranjan-Pandya.png"  style="width: 100%;" />
						</div>
						<div class="pioneer-name">
							Late Mr. Niranjan Pandya
						</div>
						<div class="pioneer-overlay">
							<div class="pioneer-name">
								<span>Late Mr. Niranjan Pandya</span>
								<span><button class="learn-more">Learn</button></span>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="award-wrapper clear-both">
				<div class="award-title">
					Awards & Accreditations
				</div>
				<div class="award-content">
					H.V. Desai Eye Hospital is frequently recognised for its commitment to <br> providing World-Class eye care & excellent patient service
				</div>
				<div class="award-images">
					<div class="award-1">
						<div class="award-img">
							<img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/NABH.jpg" alt="image-award">
						</div>
						<div class="award-name">
							<span><strong>NABH</strong> Accredited Hospital</span>
						</div>
					</div>
					<div class="award-1">
						<div class="award-img">
							<img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/Padma-Shri-Medallion.jpg" alt="image-award">
						</div>
						<div class="award-name">
							<span>Late Mr. Niranjan Pandya was honoured by the</span>
							<span>Government of India, with the fourth highest</span>
							<span>Indian civilian award of <strong>Padma Shri.</strong></span>
						</div>
					</div>
					<div class="award-1">
						<div class="award-img">
							<img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/APAO.jpg" alt="image-award">
						</div>
						<div class="award-name">
							<span>Dr. Col.(Retd) Madan Deshpande, has been </span>
							<span>awarded ‘Outstanding Service in Prevention of </span>
							<span>Blindness Award by <strong> ‘Asia Pacific Academy</strong></span>
							<span><strong>of Ophthalmology (APAO)’ </strong></span>

						</div>
					</div>

				</div>
				<div class="awards-view clear-both text-center">
					<button class="learn-more">View all</button>
				</div>
			</div>
			<div class="ophthalmologists-wrapper clear-both">
				<div class="row">
				<div class="col-md-6">
					<div class="ophthalmologists-title clear-both"><span>Creating ophthalmologists </span><span>or the future</span></div>
					<div class="ophthalmologists-content clear-both">
						<p>We have been approved as training centre for Phaco, SICS, Retina, Eye Banking & Cornea, Glaucoma and Pediatric Ophthalmology by Government of India (NPCB).</p>
						<p>The hospital also offers short term and long term fellowships to upgrade the skills of practicing
ophthalmologists. so far we have trained more than 600 ophthalmologists nominated by Government of India and private ophthalmologists from all over the country & abroad under skill transfer program
of the hospital.</p>
	<p><button class="learn-more">Apply Now</button></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="ophthalmologists-img">
						<img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/05.png" alt="test" class="img-responsive" />
					</div>
				</div>
				</div>
			</div>


			<div class="success-wrapper clear-both">
				<div class="success-title">
					Success Stories
				</div>
				<div class="success-content">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua. 
				</div>
				<div class="success-story clear-both">
					<div class="success-1">
						<div class="success-name">
							John Doe
						</div>
						<div class="success-desig">
							Lorem Ipsum
						</div>
						<div class="success-desc">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
							minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
						</div>
					</div>
				</div>
				<div class="success-view text-center clear-both">
					<button class="learn-more">View all</button>
				</div>
			</div>




			<div class="latestnews-wrapper clear-both">
				<div class="news-title">
					Latest News
				</div>
				<div class="news-content">
					<div class="row">
						<div class="col-8 left-panel-news">
							<div class="left-content-news">
								<div class="news-heading">
									H.V. Desai Eye Hospital sets up centre to train docs on advanced cataract surgery
								</div>
								<div class="news-date">
									February 22, 2019
								</div>
								<div class="news-desc">
									One of worlds most renowned manufacturer of operating microscope - Zeiss Germany will give
									technical support to the program. The Phaco training centre will operate according to the international norms and standards.
								</div>
								<div class="text-left mt-2 mb-4 pl-5">
									<button class="ml-2 learn-more">Learn More</button>
								</div>
							</div>
						</div>
						<div class="col-4 right-panel-news">
							<div class="news-img">
								<img src="<?php echo site_url();?>/wp-content/themes/hvd/assets/images/05.png"  />
							</div>
							<div class="news-heading mt-2">Eye Doc Makes Annual India
								Trip, Strengthens Partnership
								to Prevent, Reverse Blindness
							</div>
							<div class="news-date">March 4, 2018</div>
							<div class="news-desc">On his most recent trip, Litwin visited Pune for the first time, to meet with the top brass at HV Desai Eye Hospital.</div>
							<div class="text-left mt-2 mb-4 pl-2">
								<button class="ml-2 learn-more">Learn More</button>
							</div>
						</div>
					</div>
				</div>
				
			</div>














		</div>
	</div>
</div>


<?php get_footer(); ?>
