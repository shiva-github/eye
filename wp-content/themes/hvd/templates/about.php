<?php
/**
* Template Name: About us template
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
						<?php echo the_post_thumbnail('large', ['class'=>'img-responsive about_feature_img']); ?>
						<div class="common-about-summary">
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
			
			
			<div class="common-wrapper clear-both">
				<h2 class="common-title text-center">
					Our Pillars
				</h2>
				<div class="row">
					<div class="col-md-3">
						<div class="common-box">
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="common-box">
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="common-box">
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="common-box">
							
						</div>
					</div>
				</div>
			</div>


			<div class="common-wrapper clear-both">
				
				<div class="row">
					<div class="col-md-4">
						<div class="success-name">Nikita Santosh Jadhav </div>
						<div class="success-desig color-dgrey ">Student- Satara, Maharashtra, India</div>
						<div class="success-desc">

						<p>Nikita Santosh Jadhav, 15-year-old girl from Bhima Koregaon, Satara, had a squint in both eyes since birth. It did not seem to be a major problem initially, however, as she grew older, it her squint continued to increase, and started aﬀecting her vision. It started aﬀecting her ability to study. Nikita’s mother wanted to treat her, but was unable to do so because of ﬁnancial issues as well as issues related to her own health. In addition, Nikita’s squint not only aﬀected her studies, but also her social life. Despite their ﬁnancial issues, Nikita’s old parents planned her surgery, however, it had to be postponed as she caught a cold.</p> 

						<p>Shortly afterwards, H.V. Desai Eye Hospital organised a camp at Nikita’s school, following which she was referred to H.V. Desai Eye Hospital for detail screening. After the screening it was recommended for her to undergo Squint Vertical. Few days later, she underwent surgery free of cost with the help of SBI life insurance. She was very happy when she came for her follow-up. And her mother was very satisﬁed with the result. Nikita and her mother are extremely grateful towards SBI Life and H.V. Desai Eye Hospital.</p>  

						</div>
					</div>
					<div class="col-md-4">
						<div class="success-name">Vasant Balid</div>
						<div class="success-desig color-dgrey ">Farmer- Junnar, Maharashtra, India</div>
						<div class="success-desc">
							<p>
						Vasant is a poor farmer with the responsibility of his old mother, wife and three daughters. His vision problem hampered his routine life as well as his ability to work on his farm. Vasant complained of low vision for over a year. A local surgeon had diagnosed him with cataract, and had advised Vasant to undergo surgery for the same.</p> 
						<p>
						Soon after that, Vasant underwent screening at a camp conducted by H.V. Desai Eye Hospital in his district, with the support of Wonderworks & Vision. At the camp, he was diagnosed to have cataract in both eyes. The camp referred him for surgery for the same. Support from Wonderworks & Vision enabled Vasant to undergo cataract surgery free of cost at the H.V. Desai Eye Hospital. This surgery enabled Vasant to resume his day-to-day acitivites and continue to earn a living to support his family. He showed immense gratitude towards the hospital as well as the hospital for their kind and supportive behaviour throughout the entire process!</p>

						</div>
					</div>
					<div class="col-md-4">
						<div class="success-name">Nikita Santosh Jadhav </div>
						<div class="success-desig color-dgrey ">Student- Satara, Maharashtra, India</div>
						<div class="success-desc">
							<p>
						Nikita Santosh Jadhav, 15-year-old girl from Bhima Koregaon, Satara, had a squint in both eyes since birth. It did not seem to be a major problem initially, however, as she grew older, it her squint continued to increase, and started aﬀecting her vision. It started aﬀecting her ability to study. Nikita’s mother wanted to treat her, but was unable to do so because of ﬁnancial issues as well as issues related to her own health. In addition, Nikita’s squint not only aﬀected her studies, but also her social life. Despite their ﬁnancial issues, Nikita’s old parents planned her surgery, however, it had to be postponed as she caught a cold.</p>
                        <p>
						Shortly afterwards, H.V. Desai Eye Hospital organised a camp at Nikita’s school, following which she was referred to H.V. Desai Eye Hospital for detail screening. After the screening it was recommended for her to undergo Squint Vertical. Few days later, she underwent surgery free of cost with the help of SBI life insurance. She was very happy when she came for her follow-up. And her mother was very satisﬁed with the result. Nikita and her mother are extremely grateful towards SBI Life and H.V. Desai Eye Hospital.</p>  
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<?php get_footer(); ?>
