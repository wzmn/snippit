<?php 

	/* Template Name: Contact Us */ 
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
		<div class="container mx-auto px-5 mb-20">
			<div class="grid md:grid-cols-2 grid-cols-1">
				<div data-aos="fade-up" class="bg-cover bg-center hidden md:block relative" style="background-image:url('<?php echo get_field('section_1_image'); ?>');">
					<?php echo get_field("left_column"); ?>
				</div>
				<div data-aos="fade-up" data-aos-delay="200" class="relative">
					<?php the_content();?>
				</div>
			</div>
		</div>
<?php 
		endwhile;
	endif;
get_footer(); 

?>