<?php 

	/* Template Name: Strategy Template */ 
	get_header();
	if ( have_posts() ) :
    	while ( have_posts() ) : the_post();
 ?>
		<div class="banner relative truncate whitespace-normal">
			<div class="grid">
				<img src="<?php echo get_the_post_thumbnail_url(); ?>">

			</div>
		</div>
		<div class="grid grid-cols-3 gap-4 bg-gradient p-6 text-center text-white font-bold rounded-br-curve  md:mb-40 mb-20">
		
		</div>
		<div class="container mx-auto px-5 mb-20">
			<div class="grid grid-cols-3 md:grid-cols-7">
				<div class="col-start-1 md:col-start-2 col-end-6" data-aos="fade-up">
					<?php echo get_field('section_1'); ?>					
				</div>
				<div class="hidden md:block" data-aos="fade-up" data-aos-delay="100">
					<img src="<?php echo get_field('section_1_image'); ?>	" style="position: relative;top: -100px;">
				</div>
			</div>
		</div>
		<div class="container px-5 mx-auto mb-10 md:mb-40">
			<div class="flex">
				<div class="flex-1 relative hidden sm:flex flex-col" data-aos="fade-right">
					<div class="flex md:grid grid-cols-4">
						<img class="col-end-5 col-start-2" src="<?php echo get_stylesheet_directory_uri(); ?>/images/strategy/cex.png">
					</div>
					<div class="flex md:grid grid-cols-4 relative">
						<h4 class="font-bold text-3xl md:text-4xl absolute" style="word-break: break-word;left: 30%;line-height: 1.2;"><?php echo get_field('section_2_left'); ?></h4>
						<img class="col-end-5 col-start-2 max-w-[250px]" src="<?php echo get_stylesheet_directory_uri(); ?>/images/strategy/bubble.png">
					</div>
					<div class="absolute pl-10 top-[50%]">
					</div>
				</div>
				<div class="flex-1 flex flex-col" data-aos="fade-up" data-aos-delay="100">
					<?php echo get_field('section_2_right'); ?>
				</div>
			</div>
		</div>
		<div class="container px-5 mx-auto mb-10 md:mb-40" data-aos="fade-up">
			<div class="flex justify-center">
				<div class="relative text-center hidden md:block">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/strategy/dots.png" class="max-w-[250px] absolute" style="left: 50%;transform: translateX(-50%);top: -250%;z-index: -1;">
					<?php echo get_field('section_3'); ?>
				</div>
			</div>
		</div>
		<div class="container px-5 mx-auto mb-20">
			<style type="text/css">
				.skew-img {
					position: absolute;
					width: 550px;
					z-index: -1;
					max-width: initial;
					top: -60px;
				}
				.cube-hover:after {
					content: " ";
					background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/cube.png');
					position: absolute;
					width: 40px;
					height: 40px;
					top: 0px;
					right: 0;
					transition: all 0.5s ease;
					z-index: -1;
					background-size: contain;
					background-repeat: no-repeat;
				}
				.cube-hover:hover:after {
					top: -100px;
				}
			</style>
			<div class="flex flex-col md:grid grid-cols-7 gap-x-12 gap-y-6" data-aos="fade-up">
				<div class="min-h-[350px] hidden md:block relative">
					<!-- empty for the image -->
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/strategy/tilt-square.png" class="skew-img">
				</div>
				<?php echo get_field("section_4"); ?>
			</div>
		</div>
		<div class="container px-5 mx-auto mb-20">
			<div class="flex grid-cols-10 md:grid">
				<div class="hidden md:block col-start-1 col-end-5" data-aos="fade-right">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/strategy/outline.png">
				</div>
				<div class="col-start-5 col-end-10 flex flex-col justify-center" data-aos="fade-up">
					<?php echo get_field("section_5"); ?>
				</div>
			</div>
		</div>
		<div class="container px-5 mx-auto mb-20">
			<style type="text/css">
				.prev.absolute {
					left: -50px;
					z-index: 1;
					cursor: pointer;
				}
				.next.absolute {
					right: -30px;
					cursor: pointer;
					z-index: 1;
				}
			</style>
			<div class="flex flex-col grid-cols-10 md:grid" data-aos="fade-up">
				<div class="col-end-4 col-start-1 flex flex-col justify-center pr-5 mb-5 md:mb-0">
					<h4 class="text-4xl">
						Check out our CEx <br> and Digital Transformation Resources
					</h4>
				</div>
				<div class="col-start-4 col-end-10 flex flex-col justify-center relative">		
					<div class="siema-trends">
						<div class="relative mr-5">
							<div class="absolute text-white bottom-0 p-5">
								<div class="mb-2 font-semibold">CEx TRENDS</div>
								<p class="hidden md:block">10 predictions driving future customer experience success</p>
							</div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/strategy/slide.png">
						</div>
						<div class="relative mr-5">
							<div class="absolute text-white bottom-0 p-5">
								<div class="mb-2 font-semibold">CEx TRENDS</div>
								<p class="hidden md:block">10 predictions driving future customer experience success</p>
							</div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/strategy/slide1.png">
						</div>
						<div class="relative mr-5">
							<div class="absolute text-white bottom-0 p-5">
								<div class="mb-2 font-semibold">CEx TRENDS</div>
								<p class="hidden md:block">10 predictions driving future customer experience success</p>
							</div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/strategy/slide2.png">
						</div>
						<div class="relative mr-5">
							<div class="absolute text-white bottom-0 p-5">
								<div class="mb-2 font-semibold">CEx TRENDS</div>
								<p class="hidden md:block">10 predictions driving future customer experience success</p>
							</div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/strategy/slide2.png">
						</div>
					</div>
					<div class="prev absolute">
						<svg xmlns="http://www.w3.org/2000/svg" width='40' viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M360 224L272 224v-56c0-9.531-5.656-18.16-14.38-22C248.9 142.2 238.7 143.9 231.7 150.4l-96 88.75C130.8 243.7 128 250.1 128 256.8c.3125 7.781 2.875 13.25 7.844 17.75l96 87.25c7.031 6.406 17.19 8.031 25.88 4.188s14.28-12.44 14.28-21.94l-.002-56L360 288C373.3 288 384 277.3 384 264v-16C384 234.8 373.3 224 360 224zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464z"/></svg>
					</div>
					<div class="next absolute right-">
						<svg xmlns="http://www.w3.org/2000/svg" width='40' viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M280.2 150.2C273.1 143.8 262.1 142.2 254.3 146.1S239.1 158.5 239.1 167.1l.002 56L152 224C138.8 224 128 234.8 128 248v16C128 277.3 138.8 288 152 288L240 287.1v56c0 9.531 5.656 18.16 14.38 22c8.75 3.812 18.91 2.094 25.91-4.375l96-88.75C381.2 268.3 384 261.9 384 255.2c-.3125-7.781-2.875-13.25-7.844-17.75L280.2 150.2zM256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464z"/></svg>
					</div>
				</div>
			</div>
		</div>
		<div class="container py-40 bg-cover bg-left md:bg-center mx-auto mb-20" style="background-image: url('<?php echo get_field("cta_section_image"); ?>');">
			<div class="text-white px-20 text-2xl max-w-[690px]">
				<div class="mb-5">
					<?php echo get_field("cta_section"); ?>
				</div>
				<div>
					<a href="#" class="bg-blue font-semibold mb-5 p-4 px-6 text-white border border-cyan" toggle-modal>START A PROJECT</a>
				</div>
			</div>
		</div>
<?php 
		endwhile;
	endif;
get_footer(); 

?>