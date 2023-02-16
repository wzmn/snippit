<?php 

	/* Template Name: Industry Template */ 
	get_header();
	if ( have_posts() ) :
    	while ( have_posts() ) : the_post();
 ?>
		<div class="banner relative truncate whitespace-normal">
			<div class="grid">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>">
			</div>
		</div>
		<div class="grid grid-cols-3 gap-4 bg-gradient p-6 text-center text-white font-bold rounded-br-curve">
		
		</div>
		<div class="container mx-auto px-5 mb-20">
			<div class="grid md:grid-cols-2 grid-cols-1">
				<div data-aos="fade-up" class="bg-cover bg-center hidden md:block relative" style="background-image:url('<?php echo get_field('section_1_image'); ?>');">
					<img data-aos="fade-right" class="absolute max-h-[180px]" src="<?php echo get_stylesheet_directory_uri(); ?>/images/green-cut.png" style="right: -40px;bottom: -5px;">
				</div>
				<div data-aos="fade-up" data-aos-delay="200" class="pr-10 pl-10 md:pl-28 py-20 relative">
					<?php echo get_field('section_1'); ?>

				</div>
			</div>
		</div>
		<div class="container mx-auto px-5 relative bg-cover relative" data-aos="fade-up" style="background-image:url('<?php echo get_field('section_2_image'); ?>');">
			<div class="flex flex-col items-center py-32">
				<?php echo get_field('section_2'); ?>
			</div>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue-cut.png" class="absolute max-w-[150px]" style="right: -3px;top: -39px;">
		</div>
		<div class="container mx-auto mb-20">
			<div class="grid grid-cols-4 gap-x-4">
				<?php if( have_rows('section_3') ): ?>
				    <?php while( have_rows('section_3') ): the_row(); 
				        $color = get_sub_field('color');
				        ?>
						<div data-aos="fade-up" data-aos-delay="100" class="flex flex-col relative" <?php echo (get_row_index() % 2 == 0) ? "" : 'style="top: -5rem;"'; ?>>
							<div class="p-5 min-h-[180px] mb-10 flex flex-col items-center text-center drop-shadow-lg py-10" style="background-color: <?php echo $color; ?>;">
								<div>
									<img class="mb-5 max-w-[80px]" src="<?php the_sub_field('image'); ?>">
								</div>
								<div class="text-white font-bold"><?php the_sub_field('title'); ?></div>
							</div>
							<p><?php the_sub_field('text'); ?></p>
						</div>
				    <?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="bg-[#e0f8f8] relative" data-aos="fade-right">
			<style type="text/css">
				.blue-square {
					position: absolute;
					width: 20%;
					height: 100%;
					background: #c3f1f1;
					z-index: 0;
				}
				.blue-square :after {
					content: "";
					display: block;
					padding-bottom: 100%;
				}
			</style>
			<div class="container mx-auto mb-20 z-30">
			<div class="blue-square" data-aos="fade-right" data-aos-delay="200"></div>
				<div class="max-w-[80%] py-32 mx-auto relative" data-aos="fade-up" data-aos-delay="400">
					<div class="flex">
						<?php echo get_field('section_4'); ?>
					</div>
				</div>	
			</div>
		</div>
		<div class="container mx-auto mb-20">
			<style type="text/css">
				.square {
					position: relative;
					width: calc(33% - 10px);
					margin-right: 10px;
					transition: all 1s ease;
				}

				.square:after {
					content: "";
					display: block;
					padding-bottom: 100%;
				}

				.square .content {
					position: absolute;
					width: 100%;
					height: 100%;
				}
				.square span {
					position: absolute;
					bottom: 0;
					left: 50%;
					transform: translate(-50%, 100%);
				}
				.square:hover span {
					transform: translate(-50%, -50px);
				}

			</style>
			<div class="flex">
				<div class="square" data-aos="fade-up" data-aos-delay="100">
					<div class="content bg-cover text-center text-white text-2xl font-bold" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/block1.png');">
						<span>CEx Technique</span>
					</div>
				</div>
				<div class="square" data-aos="fade-up" data-aos-delay="200">
					<div class="content bg-cover text-center text-white text-2xl font-bold" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/block2.png');">
						<span>CEx Application</span>
					</div>
				</div>
				<div class="square" data-aos="fade-up" data-aos-delay="300">
					<div class="content bg-cover text-center text-white text-2xl font-bold" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/block3.png');">
						<span>CEx Utilization</span>
					</div>
				</div>
			</div>
		</div>
		<div class="container py-40 bg-cover mx-auto" data-aos="fade-up" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/service-cta-banner.png');">
			<div class="text-white px-20 text-2xl max-w-[690px]">Ready to accelerate your brand's digital and CX transformation?</div>
		</div>
		<div class="container py-20 mx-auto">
			<div class="flex flex-col items-center" data-aos="fade-up">
				<a href="<?php echo get_the_permalink(get_page_by_title("Contact Us")->ID); ?>" class="bg-cyan font-semibold mb-5 p-4 px-6 text-white">CONTACT US</a>
				<p>Ready to accelerate your company's CX transformation? <a href="<?php echo get_the_permalink(get_page_by_title("Contact Us")->ID); ?>" class="text-blue font-semibold">Let's Get Started</a></p>
			</div>
		</div>
<?php 
		endwhile;
	endif;
get_footer(); 

?>