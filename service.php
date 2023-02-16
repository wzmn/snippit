<?php 

	/* Template Name: Service Template */ 
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
		<div class="container mx-auto px-5 mb-40">
			<div class="flex flex-row">
				<div class="flex flex-1 flex-col justify-end md:pl-20 pt-10 md:pt-0" data-aos="fade-up">
					<?php echo get_field('section_1'); ?>
				</div>
				<div class="hidden md:flex flex-1 items-start justify-center py-5">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service/section-1.png" class="max-h-[300px]" data-aos="fade-left" data-aos-delay='200'>
				</div>
			</div>
		</div>
		<div class="container mx-auto px-5 md:mb-52 mb-20">
			<style type="text/css">
				.section-2-img {
					top: 0;
					z-index: -1;
					left: -8%;
					width: 107%;
					max-width: 107%;
				}
			</style>
			<div class="flex flex-col mb-8" data-aos="fade-up">
				<?php echo get_field("section_2_title"); ?>
			</div>
			<div class="relative">
				<div class="grid grid-cols-4 pl-[15%] pt-[7%] gap-x-10 pr-10 pb-6">
				<?php if( have_rows('section_2_icons') ): ?>

				    <?php while( have_rows('section_2_icons') ): the_row(); ?>

						<div>
							<img src="<?php echo get_sub_field('icon'); ?>" class="max-w-[25%] mb-5">
							<p class="text-white"><?php echo get_sub_field('text'); ?></p>
						</div>
				    <?php endwhile; ?>

				<?php endif; ?>

				</div>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service/section-2.png" class="absolute section-2-img">
			</div>
		</div>
		<div class="container mx-auto px-5 mb-20">
			<style type="text/css">
				.img-tl {
					top: -50px;
					max-width: 50px;
					left: -60px;
				}
			</style>
			<div class="flex flex-col md:flex-row">
				<div class="w-5/12 pt-8 relative mb-10">
					<?php echo get_field("section_3_title"); ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service/section-3-tr.png" class="absolute img-tl">
				</div>
				<div class="w-full flex flex-col justify-center">
					<?php echo get_field("section_3_text"); ?>
				</div>
			</div>
		</div>

		<div class="container mx-auto px-5 mb-40">
			<style type="text/css">
				.img-corner-1 {
				    max-width: 85px;
				    bottom: -45px;
				    left: -40px;
				    z-index: -1;
				}
				.img-corner-2 {
					max-width: 85px;
					right: -25px;
					top: -50px;
					z-index: -1;
					transform: rotate(135deg);
				}
			</style>
			<div class="flex flex-col md:flex-row">
				<div class="flex-1 flex justify-center mb-10">
					<div class="relative">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service/section-3-img-corner.png" class="absolute img-corner-1">
						<img src="<?php echo get_field("section_4_image_1"); ?>" class="max-w-[350px]">
					</div>
				</div>
				<div class="flex flex-col flex-1 justify-center mb-10">
					<div class="max-w-[25rem] text-sm">
						<?php echo get_field("section_4_text_1"); ?>
					</div>
				</div>
			</div>
			<div class="flex flex-col md:flex-row">
				<div class="flex flex-col flex-1 justify-center md:items-end mb-10">
					<div class="max-w-[25rem] text-sm">
						<?php echo get_field("section_4_text_2"); ?>
					</div>
				</div>
				<div class="flex-1 flex justify-center">
					<div class="relative">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service/section-3-img-corner.png" class="absolute img-corner-2">
						<img src="<?php echo get_field("section_4_image_2"); ?>" class="max-w-[350px]">
					</div>
				</div>
			</div>
		</div>
		<div class="container mx-auto px-5 mb-40 py-20 pl-28 bg-cover bg-no-repeat" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/service/section-4.png');">
			<style type="text/css">
				.section-4-img-1 {
				    position: absolute;
				    max-width: 40%;
				    top: -140px;
				    right: 0;
				}
				.section-4-img-2 {
				    position: absolute;
				    max-width: 80%;
				    right: 7%;
				}
			</style>
			<div class="flex">
				<div class="flex-1 text-white">
					<?php echo get_field("cta"); ?>
				</div>
				<div class="flex-1 relative hidden md:block">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service/section-4-1.png'" class="section-4-img-1">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service/section-4-2.png'" class="section-4-img-2 relative">
				</div>
			</div>
		</div>
		<div class="container mx-auto px-5 mb-20">
			<style type="text/css">
				.form-image {
					max-width: 250px;
					left: 50%;
					transform: translateX(-50%);
					top: -130px;
					z-index: -1;
				}
			</style>
			<div class="flex flex-col-reverse md:flex-row">
				<div class="relative flex-1">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/service/section-5.png" class="hidden md:block absolute form-image">
					<form class="p-10 flex flex-row flex-wrap relative bg-white shadow-xl border border-[#eaeaea] justify-between">
						<input type="text" name="firstname"  placeholder="First Name" required class="w-[48.5%] mb-5 p-3 border border-[#eaeaea] text-sm">
						<input type="text" name="lastname" placeholder="Last Name" required class="w-[48.5%] mb-5 p-3 border border-[#eaeaea] text-sm">
						<input type="email" name="email" placeholder="Business Email" required class="w-[48.5%] mb-5 p-3 border border-[#eaeaea] text-sm">
						<input type="text" name="country" placeholder="Country" required class="w-[48.5%] mb-5 p-3 border border-[#eaeaea] text-sm">
						<textarea rows="4" placeholder="Comments" class="w-full mb-5 p-4 border border-[#eaeaea] text-sm"></textarea>
						<div class="flex w-full justify-center">
							<input type="submit" value="CONTACT US" class="px-6 py-4 bg-blue text-white">
						</div>
					</form>
				</div>
				<div class="flex-1 flex flex-col justify-end items-center">
					<div>
						<div class="font-light mb-5 text-5xl">Contact Us</div>
						<p>Learn how we use your info and the content that we email.</p>
						<p>If you are experiencing issues with this form contact cex@cogncise.com</p>
					</div>
				</div>
			</div>
		</div>
<?php 
		endwhile;
	endif;
get_footer(); 

?>