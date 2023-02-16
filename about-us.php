<?php 

	/* Template Name: About Us */ 
	get_header();
	if ( have_posts() ) :
    	while ( have_posts() ) : the_post();
 ?>
		<div class="banner relative truncate whitespace-normal">
			<div class="grid">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>">
			</div>
		</div>
		<div class="grid grid-cols-3 gap-4 bg-gradient p-6 text-center text-white font-bold rounded-br-curve mb-20">
		
		</div>
		<div class="container mx-auto mb-20 py-16 bg-cover flex justify-end bg-bottom" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/about-us/section1.png');">
			<div class="px-10 w-full md:w-2/4 relative">
				<?php echo get_field('section_1'); ?>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about-us/section1-2.png" class="absolute max-w-[120px] right-0">
			</div>
		</div>
		<div class="container mx-auto mb-20">
			<style type="text/css">
				.flippy {
					transition: all 0.5s ease;
					cursor: pointer;
				}
				.flippy .content {
					display: none;
				}
				.flippy:hover {
					transform: rotateY(180deg);
				}
				.flippy:hover span, .flippy:hover img {
					display: none;
				}
				.flippy:hover .content {
					display: block;
					    transform: rotateY(-180deg);
				}
			</style>
			<div class="flex flex-col items-center px-10 text-center mb-10">
				<?php echo get_field('section_2_title'); ?>
			</div>
			<div class="grid grid-cols-2 md:grid-cols-4 lg:gap-x-20 gap-x-8">
				<?php if( have_rows('section_2_content') ): ?>
				    <?php while( have_rows('section_2_content') ): the_row(); ?>
					<div class="mb-10 rounded-br-curve flex flex-col justify-evenly md:min-h-[250px] justify-center items-center text-white lg:min-h-[300px] p-8 flippy" style="background-color: <?php echo get_sub_field('color'); ?>;">
						<img src="<?php echo get_sub_field('image'); ?>" class=" max-w-[100px]">
						<span><?php echo get_sub_field('title'); ?></span>
						<div class="content">
							<?php echo get_sub_field('content'); ?>
						</div>
					</div>
				    <?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="container mx-auto mb-20">
			<div class="flex flex-col items-center">
				<div class="mb-10 font-semibold">Make Data do More for You</div>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about-us/section-3.png" class="">
				<a href="#" class="bg-blue px-3 py-2 text-white">GET STARTED</a>
			</div>
		</div>
		<div class="container mx-auto mb-40 relative py-16 md:py-32 bg-cover" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/about-us/section-4.png');">
			<style type="text/css">
				.section-img {
				    max-width: 200px;
				    left: 50%;
				    transform: translateX(-50%);
				    bottom: -130px;
				    z-index: -1;
				}
			</style>
			<div class="flex flex-col items-center justify-center px-10">
				<div class="text-white text-4xl mb-5">
					Make your life easier with Cogncise
				</div>
				<div class="mb-5">True customer loyalty can't be bought — but it can be built through strategic CEx transformation.</div>
				<div class="flex flex-row justify-evenly">
					<a class="bg-blue px-3 py-2 mr-5 text-white">Know Cogncise</a>
					<a class="border border-blue px-3 py-2 text-white">Know Cogncise</a>
				</div>
			</div>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about-us/section-4-2.png" class="absolute section-img">
		</div>
<?php 
		endwhile;
	endif;
get_footer(); 

?>