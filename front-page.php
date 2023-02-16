<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php cogncise_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/siema@1.5.1/dist/siema.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<nav class="relative bg-white sticky top-0 z-30 w-full px-2 py-2 bg-white sm:px-4 shadow-sm">
		<div class="container mx-auto flex justify-between items-center sm:pr-10">
			<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
				if ($custom_logo_id) :
					$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
			?>
			<a href="<?php echo get_home_url(); ?>" name="logo">
				<span class="text-2xl font-extrabold text-blue-600">
					 <img alt="logo" class="max-w-[170px]" src="<?php echo $image[0]; ?>">
				</span>
			</a>
			<?php endif; ?>
			<?php 
				wp_nav_menu(array(
					'menu'				=> "Main menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
					'menu_class'		=> "hidden md:flex", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
					//'before'			=> "<span class='relative block py-6 px-2 lg:p-6 text-sm p-2 font-light text-gray-600'>", // (string) Text before the link markup.
					//'after'				=> "</span>", // (string) Text after the link markup.
					'walker' => new Tailwind_Menu_Walker()
				) );
			?>
			<a href="#" onclick="toggleMobileMenu();" class="items-center justify-center md:hidden sm:flex">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="fill: black;width: 20px;"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
			</a>
		</div>
	</nav>
	<nav class="mobile-menu fixed">
		<div class="close-btn">
			<svg onclick="toggleMobileMenu();" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="15"><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg>
		</div>
		<?php 
				wp_nav_menu(array(
					'menu'				=> "Mobile Menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
					'menu_class'		=> "flex flex-col", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
				) );
			?>
	</nav>
	<main class="font-regular relative">
		<div class="container mx-auto mb-40" hero>
			<div class="banner relative truncate whitespace-normal">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner.png" alt="">
			</div>
		</div>
		<div class="container mx-auto mb-40">
			<style>
				.img-corner {
					max-width: 100px;
					left: -39px;
					z-index: -1;
					bottom: -50px;
				}
			</style>
			<div class="flex">
				<div class="w-1/4 relative">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/section-2.png" alt="section 2" data-aos="fade-up">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/corner-blue.png" alt="blue-corner" class="absolute img-corner" data-aos="fade-right">
				</div>	
				<div class="flex items-center w-3/4">
					<p class="text-base leading-9" data-aos="fade-up" data-aos-delay="100">Say goodbye to the hassle of searching for separate services as Snippit provides you with a diverse range of services catering to all your requirements. From energy-saving solutions to home repairs and medical care, Snippit has got you covered. Get services that save you time & also fit your budget. Experience top-notch quality at budget-friendly prices.</p>
				</div>
			</div>
		</div>
		<div class="container mx-auto mb-40">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/parallax.png" class="parallax">
		</div>
		<div class="container mx-auto mb-40 relative">
			<style>
				.arrowish {
					top: -2px;
					height: calc(100% + 7px);
					right: -30px;
				}
				@media (max-width: 1024px) {
					.marker {
						position: absolute;
						left: -10px;
						transform: rotate(270deg) translateX(50%);
						top: 50%;
					}
				}
			</style>
			<div class="flex min-h-[400px] shadow flex-col lg:flex-row" data-aos="fade-right" data-aos-delay="50">
				<div class="w-full lg:w-72 text-4xl px-10 flex flex-col relative items-center mb-10 justify-between">
					<div class="marker mb-10" data-aos-delay="100" data-aos="fade-down">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/green.png" class="max-w-[60px]">
					</div>
					<div data-aos="fade-right" data-aos-delay="100">
						<span class="text-base">
						Features
						</span>
						<div>
						Solutions that
						</div>
						<div class="font-bold">
						fit your </br>
						specific needs
						</div>
					</div>
				</div>
				<div class="flex w-full z-10 flex-col lg:flex-row">
					<div class="flex flex-col items-center relative px-20 w-full lg:w-1/3">
						<div class="marker mb-20" data-aos-delay="300" data-aos="fade-down">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yellow.png" class="max-w-[60px]">
						</div>
						<div class="flex flex-col items-center justify-center pb-6 text-center" data-aos-delay="300" data-aos="fade-up">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/repair.svg" class="max-w-[70px] mb-5">
							<div class="font-bold mb-5 text-xl">
								Essential Services
							</div>
							<p>With Snippit, you get savvy solutions that streamline your essential needs and save you both time and money.</p>
						</div>
					</div>
					<div class="flex flex-col items-center relative px-20 w-full lg:w-1/3">
						<div class="marker mb-20" data-aos-delay="500" data-aos="fade-down">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cyan.png" class="max-w-[60px]">
						</div>
						<div class="flex flex-col items-center justify-center pb-6 text-center" data-aos-delay="500" data-aos="fade-up">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/target.svg" class="max-w-[70px] mb-5">
							<div class="font-bold mb-5 text-xl">
								Your One-Stop Shop
							</div>
							<p>Snippit has everything you need for a simplified life, from energy effeciency to home repairs and even healthcare services.</p>
						</div>
					</div>
					<div class="flex flex-col items-center relative px-20 w-full lg:w-1/3">
						<div class="marker mb-20" data-aos-delay="700" data-aos="fade-down">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue.png" class="max-w-[60px]">
						</div>
						<div class="flex flex-col items-center justify-center pb-6 text-center" data-aos-delay="700" data-aos="fade-up">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/pie-chart.svg" class="max-w-[70px] mb-5">
							<div class="font-bold mb-5 text-xl">
								Best of Both Worlds
							</div>
							<p>Snippit strikes the perfect balance between affordibility and qaulity, providing you with services that meet your budget and exceed your expectations.</p>
						</div>
					</div>
				</div>
			</div>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-shadow.png" class="absolute h-full arrowish z-0 hidden lg:block"  data-aos="fade-right" data-aos-delay="150">
		</div>
		<div class="container mx-auto mb-40">
			<style>
				.block .curve {
					border-radius: 3vw;
					overflow: hidden;
				}
			</style>
			<div class="flex flex-wrap">
				<div class="block w-3/6 text-center" data-aos="fade-right" data-aos-offset="300">
					<div class="m-10 curve">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/block1.jpg" class="parallax-block">
					</div>
					<div class="text-xl">All your essential services in one tap</div>
				</div>
				<div class="block w-3/6 text-center mt-28" data-aos="fade-left" data-aos-offset="300">
					<div class="m-10 curve">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/block3.jpg" class="parallax-block">
					</div>
					<div class="text-xl">Login made easy. Effortless access to everything.</div>
				</div>
				<div class="block w-3/6 text-center" data-aos="fade-right" data-aos-offset="300">
					<div class="m-10 curve">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/block2.jpg" class="parallax-block">
					</div>
					<div class="text-xl">Sign up in seconds, book an appointment</div>
				</div>
				<div class="block w-3/6 text-center mt-28" data-aos="fade-left" data-aos-offset="300">
					<div class="m-10 curve">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/block4.jpg" class="parallax-block">
					</div>
					<div class="text-xl">Upgrade your energy, upgrade your life</div>
				</div>
			</div>
		</div>
		<div class="container mx-auto mb-40">
			<style>
				.testimonials [class|=test] {
					top: calc(50% - 23px);
					position: absolute;
				}
				.testimonials .test-left {
					left: 0px;
				}
				.testimonials .test-right {
					right: 0px;
				}
				.testimonials [class|=test] {
					border: 1px solid black;
					border-radius: 50%;
					padding: 7px;
					background: white;
					cursor: pointer;
				}
			</style>
			<div class="testimonials relative">
				<div class="siema-testimonials relative" data-aos="fade-up" data-aos-offset="100">
					<div class="flex flex-col md:flex-row px-8 items-center">
						<div class="mb-10 md:mb-0 w-1/3">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial.jfif" alt="">
						</div>
						<div class="flex flex-col justify-center px-20 w-2/3">
							<div class="mb-10 text-2xl">
								"The happy customer, an often untapped marketing asset, can play a powerful role in the success of a business."
							</div>
							<div class="text-blue">
								— Jamie John
							</div>
						</div>
					</div>
					<div class="flex flex-col md:flex-row px-8 items-center">
						<div class="mb-10 md:mb-0 w-1/3">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial.jfif" alt="">
						</div>
						<div class="flex flex-col justify-center px-20 w-2/3">
							<div class="mb-10 text-2xl">
								"The happy customer, an often untapped marketing asset, can play a powerful role in the success of a business."
							</div>
							<div class="text-blue">
								— Jamie John
							</div>
						</div>
					</div>
				</div>
				<div class="test-left" data-aos="fade-right">
					<svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
				</div>
				<div class="test-right" data-aos="fade-left" data-aos-delay="200">
					<svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.3.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
				</div>
			</div>
		</div>
		<div class="container mx-auto mb-40">
			<style>
				.download {
					border-radius: 50px;
				}
			</style>
			<div class="flex flex-col items-center py-20 md:py-36">
				<div class="mb-10 text-4xl md:text-8xl" data-aos="fade-up">Download Now</div>
				<div class="flex flex-col md:flex-row">
					<button class="download text-xl shadow px-20 py-2 flex items-center mr-5 md:mr-20 mb-10 md:mb-0" data-aos="fade-up"  data-aos-delay="200">
						<svg xmlns="http://www.w3.org/2000/svg" width="28.74" height="35.253" viewBox="0 0 28.74 35.253" class="mr-5">
						<g id="apple-logo" transform="translate(-2.104)">
							<g id="Group_1147" data-name="Group 1147" transform="translate(2.104)">
							<path id="Path_39078" data-name="Path 39078" d="M18.2,0h.251a7.549,7.549,0,0,1-1.9,5.689,5.893,5.893,0,0,1-5.187,2.435,7.322,7.322,0,0,1,1.935-5.512A8.358,8.358,0,0,1,18.2,0Z" transform="translate(2.957)"/>
							<path id="Path_39079" data-name="Path 39079" d="M30.844,22.867v.07a20.511,20.511,0,0,1-2.935,5.658c-1.119,1.54-2.491,3.613-4.94,3.613-2.116,0-3.522-1.361-5.691-1.4-2.294-.037-3.556,1.138-5.653,1.433h-.715A6.388,6.388,0,0,1,7.222,29.7,22.269,22.269,0,0,1,2.1,16.89V15.313a10.331,10.331,0,0,1,4.511-8.48A7.618,7.618,0,0,1,11.73,5.649a12.866,12.866,0,0,1,2.506.718,6.92,6.92,0,0,0,2.5.751A6.012,6.012,0,0,0,18.5,6.581c1.728-.624,3.421-1.339,5.653-1a7.843,7.843,0,0,1,5.763,3.437,7.4,7.4,0,0,0-3.757,7.338A7.575,7.575,0,0,0,30.844,22.867Z" transform="translate(-2.104 3.009)"/>
							</g>
						</g>
						</svg>
						<div>
							<div class="text-sm">Download on the</div>
							<div class="font-semibold">APP STORE</div>
						</div>
					</button>
					<button class="download text-xl shadow px-20 py-2 flex items-center" data-aos="fade-up"  data-aos-delay="400">
						<svg id="google-play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mr-5" width="31.585" height="35.184" viewBox="0 0 31.585 35.184">
							<defs>
								<linearGradient id="linear-gradient" x1="0.915" y1="17.626" x2="-0.383" y2="16.957" gradientUnits="objectBoundingBox">
								<stop offset="0" stop-color="#00a0ff"/>
								<stop offset="0.007" stop-color="#00a2ff"/>
								<stop offset="0.26" stop-color="#00beff"/>
								<stop offset="0.512" stop-color="#00d2ff"/>
								<stop offset="0.76" stop-color="#00dfff"/>
								<stop offset="1" stop-color="#00e3ff"/>
								</linearGradient>
								<linearGradient id="linear-gradient-2" x1="1.076" y1="49.373" x2="-1.305" y2="49.373" gradientUnits="objectBoundingBox">
								<stop offset="0" stop-color="#ffe000"/>
								<stop offset="0.409" stop-color="#ffbd00"/>
								<stop offset="0.775" stop-color="#ffa600"/>
								<stop offset="1" stop-color="#ff9c00"/>
								</linearGradient>
								<linearGradient id="linear-gradient-3" x1="0.862" y1="32.329" x2="-0.501" y2="30.56" gradientUnits="objectBoundingBox">
								<stop offset="0" stop-color="#ff3743"/>
								<stop offset="1" stop-color="#e30864"/>
								</linearGradient>
								<linearGradient id="linear-gradient-4" x1="-0.188" y1="35.049" x2="0.421" y2="34.259" gradientUnits="objectBoundingBox">
								<stop offset="0" stop-color="#00a06f"/>
								<stop offset="0.068" stop-color="#00a86e"/>
								<stop offset="0.476" stop-color="#00cf6e"/>
								<stop offset="0.801" stop-color="#00e76d"/>
								<stop offset="1" stop-color="#00ef6d"/>
								</linearGradient>
							</defs>
							<path id="Path_39052" data-name="Path 39052" d="M26.816,6.567a2.739,2.739,0,0,0-.633,1.922V38.742a2.738,2.738,0,0,0,.633,1.922l.1.1L43.864,23.815v-.4L26.917,6.468Z" transform="translate(-26.183 -6.024)" fill="url(#linear-gradient)"/>
							<path id="Path_39053" data-name="Path 39053" d="M289.132,182.573l-5.649-5.651v-.4l5.65-5.65.127.073,6.693,3.8c1.912,1.086,1.912,2.863,0,3.95l-6.693,3.8Z" transform="translate(-265.802 -159.13)" fill="url(#linear-gradient-2)"/>
							<path id="Path_39054" data-name="Path 39054" d="M58.221,261.779,52.443,256,35.4,273.049c.63.667,1.67.75,2.843.084l19.983-11.354" transform="translate(-34.762 -238.409)" fill="url(#linear-gradient-3)"/>
							<path id="Path_39055" data-name="Path 39055" d="M58.221,11.814,38.238.46C37.065-.206,36.025-.123,35.4.544L52.443,17.592Z" transform="translate(-34.762 0)" fill="url(#linear-gradient-4)"/>
						</svg>
						<div>
							<div class="text-sm">Download on the</div>
							<div class="font-semibold">PLAY STORE</div>
						</div>
					</button>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<div class="container mx-auto flex flex-col border-b-[#e9e9e9] border-t-[#e9e9e9] border-r-0 border-l-0 border-t border-b">
			<div class="text-3xl md:text-5xl w-3/5 font-light my-20">
				Essential Services, at Your Fingertips
			</div>
			<div class="flex mb-10">
				<div class="flex-1">
					<img src="<?php echo $image[0]; ?>" class="max-w-[190px] mb-3">
					<div class="mb-3">One stop platform for essential services</div>

					<div class="flex">
						<i class="fa-brands mr-5 text-white text-xl fa-twitter"></i>
						<i class="fa-brands mr-5 text-white text-xl fa-linkedin"></i>
						<i class="fa-brands mr-5 text-white text-xl fa-instagram"></i>
					</div>

				</div>
				<div class="flex-1">
					<div class="font-bold">Company</div>
					<ul class="list-none">
						<li class="py-1">About Us</li>
						<li class="py-1">Why Snippit</li>
						<li class="py-1">Marketplace</li>
					</ul>
				</div>
				<div class="flex-1">
					<div class="font-bold">Media</div>
					<ul class="list-none">
						<li class="py-1">About Us</li>
						<li class="py-1">Why Snippit</li>
						<li class="py-1">Marketplace</li>
					</ul>
				</div>
				<div class="flex-1">
					<div class="font-bold">Contact</div>
					<ul class="list-none">
						<li class="py-1">About Us</li>
						<li class="py-1">Why Snippit</li>
						<li class="py-1">Marketplace</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container mx-auto">
			<div class="flex justify-center py-5">
				<div>Copyright © 2022 - 2023 Snippit all rights reserved </div>
			</div>
		</div>
		
	</footer>
	<script type="text/javascript">
		function ifExists(selector, cb){
			if (!!document.querySelector(selector)){
				cb(document.querySelector(selector))
			}
		}
		function toggleMobileMenu(){
			document.querySelector('.mobile-menu').classList.toggle('active')
			document.querySelector('body').classList.toggle('menu-open')
		}
		document.addEventListener("DOMContentLoaded", function(){
			
			AOS.init();
			ifExists('.siema-testimonials', function (element) {
				window.banner = new Siema({
				  selector: '.siema-testimonials',
				  duration: 1200,
				  easing: 'ease-out',
				  perPage: 1,
				  startIndex: 0,
				  draggable: true,
				  multipleDrag: true,
				  threshold: 20,
				  loop: true,
				  rtl: false,
				  onInit: (s) => {
				  },
				  onChange: () => {},
				});
				document.querySelector('.test-left').addEventListener('click', () => banner.prev() );
				document.querySelector('.test-right').addEventListener('click', () => banner.next() );
			})
			ifExists('.parallax', function(){
				let image = document.getElementsByClassName('parallax');
				new simpleParallax(image, {
					delay: .6,
					scale: 2,
					transition: 'cubic-bezier(0,0,0,1)'
				});
			})
			ifExists('.parallax-block', function(){
				let image = document.getElementsByClassName('parallax-block');
				new simpleParallax(image, {
					delay: 1,
					scale: 1.4,
					transition: 'cubic-bezier(0,0,0,1)'
				});
			})
		})

	</script>
</body>