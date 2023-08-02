<?php 


get_header();

?>
		<div class="container mx-auto mb-10" hero>
			<style>
				.magnet {
					transition: transform .3s ease;
				}
				.back {
					bottom: 0;
					max-width: 530px;
				}
				.service {
					max-width: 330px;
					bottom: -100%;
					z-index: 2;
					scale: 0.9;
				}
				.phone {
					bottom: 0px;
					max-width: 280px;
					z-index: 1;
				}
				.green, .blue, .cyan, .yellow {
					opacity: 0;
					left: -100%;
					bottom: 40%;
					max-width: 200px;	
					z-index: 3;	
				}
				.arrow-left {
					max-width: 10%;
					bottom: 340px;
					opacity: 0;
					rotate: -90deg;
				}
				.arrow-right {
					max-width: 13%;
					bottom: 340px;
					opacity: 0;
					rotate: -90deg;
				}
				@media (min-width: 768px) {
					.green, .blue, .cyan, .yellow {
						z-index: 0;
					}
					.phone {
						bottom: -20px;
						max-width: 20%;
					}
					.service {
						max-width: 23.8%;
						bottom: -100%;
						scale: 0.8;
					}
					.back {
						max-width: 50%;
					}
					.green {
						opacity: 1;
						left: initial;
						bottom: 0;
						max-width: 10%;		
					}
					.blue {
						opacity: 1;
						left: initial;
						bottom: 0;
						max-width: 12.5%;		
					}
					.cyan {
						opacity: 1;
						left: initial;
						bottom: 0;
						max-width: 15%;		
					}
					.yellow {
						opacity: 1;
						left: initial;
						bottom: 0;
						max-width: 18%;		
					}
				}
			</style>
			<div class="banner relative flex justify-center md:min-h-[620px]">
				<div class="w-full md:w-4/6 px-5 text-center pt-5">
					<div class="text-3xl md:text-4xl xl:text-6xl mb-2 md:mb-5 fade-down font-semibold">
						Search. Compare. Save   
					</div>
					<div class="text-2xl md:text-4xl mb-2 md:mb-5 fade-down">On your Essential Services</div>
					<div id="app" class="text-3xl mb-10 font-bold fade-down"></div>
				</div>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cutout/green-back.png" class="absolute back">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cutout/phone.png" class="absolute phone">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cutout/service.png" class="absolute service">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cutout/green.png" class="absolute magnet green">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cutout/arrow-right.png" class="absolute arrow-right hidden md:block">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cutout/cyan.png" class="absolute magnet cyan">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cutout/blue.png" class="absolute magnet blue">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cutout/arrow-left.png" class="absolute arrow-left hidden md:block">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cutout/yellow.png" class="absolute magnet yellow">

			</div>
		</div>
		<div class="flex justify-center mb-20 md:mb-40 container mx-auto px-5" video>
			<video autoplay muted loop playsinline poster="<?php echo get_stylesheet_directory_uri(); ?>/images/home-poster.png">
				<source src="<?php echo get_stylesheet_directory_uri(); ?>/images/home.mp4" type="video/mp4">
			</video>
		</div>
		<div class="container flex justify-center mb-20 md:mb-40 mx-auto" ask-how>
			<div class="lg:max-w-[60%] w-full px-5">
				<div class="text-3xl md:text-5xl lg:text-7xl mb-10 px-10 lg:px-28 font-semibold text-center" data-aos="fade-up">Experience Convenience Like  <span class="text-blue">Never Before</span></div>
				<div class="flex items-center justify-center flex-col md:flex-row">
					<div class="bg-[#f4faff] rounded-[1rem] md:mb-0 mb-10 p-10 flex w-4/5 mr-0 md:mr-10 items-center" data-aos="fade-right">
						<img src="<?php echo get_stylesheet_directory_uri();?>/images/star.png" class="max-w-[60px] mr-5">
						<p class="text-base font-semibold mb-0">Snippit's essential services deliver unparalleled value, making your everyday essentials <span class="text-blue">extraordinary</span></p>
					</div>
					<div class="">
						<button class="font-semibold text-cyan text-xl" data-aos="fade-left">Ask Us How</button>
					</div>
				</div>
			</div>
		</div>
		<div class="container mx-auto mb-20 md:mb-40 flex items-center flex-col px-5" id="features">
			<div class="text-2xl mb-5" data-aos="fade-up">Features</div>
			<div class="mb-20 font-semibold text-3xl text-center" data-aos="fade-up">Solutions that fit your <span class="text-lime">specific needs</span></div>
			<div class="flex flex-col lg:max-w-[80%] rows">
				<div class="flex-row flex lg:space-x-28 space-x-0">
					<div class="flex-1">
						<div class="bg-lime flex justify-center items-center h-full rounded-bl-curve" data-aos="fade-right">
							<div data-aos="zoom-in" data-aos-delay="100">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/block-1.png" class="max-h-[500px]">
							</div>
						</div>
					</div>
					<div class="flex flex-1 flex-col justify-center">
						<div class="px-4 md:px-10" data-aos="fade-left">
							<div class="text-xl md:text-3xl font-semibold mb-5">Your <span class="text-gradient">One-Stop</span> Shop</div>
							<p>Snippit has everything you need for a simplified life, from every efficiency to home repairs and even health services.</p>
						</div>
					</div>
				</div>
				<div class="flex-row-reverse flex lg:space-x-28 space-x-0">
					<div class="flex-1">
						<div class="bg-cyan flex justify-center items-center h-full rounded-br-curve" data-aos="fade-left">
							<div data-aos="zoom-in" data-aos-delay="100">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/block-2.png" class="max-h-[500px]">
							</div>
						</div>
					</div>
					<div class="flex flex-1 flex-col justify-center">
						<div class="px-4 md:px-10" data-aos="fade-right">
							<div class="text-xl md:text-3xl font-semibold mb-5">Get the Right <span class="text-gradient">Pro</span> for the Job</div>
							<p>Snippit let's you easily connect with qualified and certified professionals for any task at hand.</p>
						</div>
					</div>
				</div>
				<div class="flex-row flex lg:space-x-28 space-x-0">
					<div class="flex-1">
						<div class="bg-blue flex justify-center items-center h-full rounded-bl-curve" data-aos="fade-right">
							<div data-aos="zoom-in" data-aos-delay="100">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/block-3.png" class="max-h-[500px]">
							</div>
						</div>
					</div>
					<div class="flex flex-1 flex-col justify-center">
						<div class="px-4 md:px-10" data-aos="fade-left">
							<div class="text-xl md:text-3xl font-semibold mb-5">Never Miss A Beat With <span class="text-gradient">Snippit!</span></div>
							<p>Snippit has everything you need for a simplified life, from every efficiency to home repairs and even health services.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mx-auto mb-20 md:mb-40 py-10 px-5" id="how-it-works">
			<style>
				#how-it-works .bg-img {
					top: 0;
					max-width: 20%;
					right: 0;
					transform: translateY(calc(-100% - -1px));
					min-width: 150px;
				}
				.bg-color {
					width: 100%;
					position: absolute;
					z-index: -1;
					min-height: 380px;
					height: 100%;
				}
				.ss-container>.w-full:nth-child(2) .upside-down {
					transform: rotate(180deg);
				}
				.ss-container>.w-full:nth-child(4) .upside-down {
					transform: rotate(180deg);
				}
				.ss-container>.w-full>img {
					transition: scale 0.4s ease;
					scale: 0.9;
				}
				.ss-container>.w-full>img:not(.hidden):hover {
					scale: 1.1;
				}
			</style>
			<div class="flex flex-col sm:items-end justify-center w-full sm:w-4/5 mb-10 items-center">
				<div class="md:text-3xl font-light" data-aos="fade-left">How it Works</div>
				<div class="flex flex-col sm:flex-row items-baseline">
					<div class="text-5xl" data-aos="fade-right">Functional.</div>
					<div class="text-7xl font-bold text-cyan" data-aos="fade-up">Simple</div>
				</div>
			</div>
			<div class="flex relative">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/how-it-works.png" class="absolute bg-img">
				<div class="bg-[#52D49A] rounded-[2rem] bg-color lg:max-h-[380px]"></div>
				<div class="flex pt-10 ss-container w-full flex-col lg:flex-row">
					<div class="flex flex-row lg:flex-col items-center lg:w-1/4 w-full" data-aos="zoom-in-up">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/f1.png" class="mb-10 max-w-[50%] lg:max-w-full">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yellow.png" class="max-w-[30px] mb-10 hidden lg:block">
						<div class="px-8 text-xl max-lg:text-white">Sign up in a snap and access Snippit's power-packed app.</div>
					</div>
					<div class="flex flex-row lg:flex-col items-center lg:w-1/4 w-full" data-aos="zoom-in-up" data-aos-delay="100">
						<div class="px-8 text-xl text-white">Pick from our range of essential services tailored to your needs.</div>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/f2.png" class="mb-10 max-w-[50%] lg:max-w-full">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cyan.png" class="max-w-[30px] mb-10 hidden lg:block upside-down">
					</div>
					<div class="flex flex-row lg:flex-col items-center lg:w-1/4 w-full" data-aos="zoom-in-up" data-aos-delay="200">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/f3.png" class="mb-10 max-w-[50%] lg:max-w-full">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/green.png" class="max-w-[30px] mb-10 hidden lg:block">
						<div class="px-8 text-xl max-lg:text-white">Self-assess like a pro with Snippit's user-friendly interface.</div>
					</div>
					<div class="flex flex-row lg:flex-col items-center lg:w-1/4 w-full" data-aos="zoom-in-up" data-aos-delay="300">
						<div class="px-8 text-xl text-white">Stay updated on the go with timely alerts for your selected service.</div>
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/f4.png" class="mb-10 max-w-[50%] lg:max-w-full">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue.png" class="max-w-[30px] mb-10 hidden lg:block upside-down">
					</div>
				</div>
			</div>
		</div>
		<style>
			[join-now] {
				position: relative;
			}
			[join-now]:before {
				content: " ";
				position: absolute;
				top: 0;
				right: -50%;
				z-index: -1;
				background-color: #e2f2ff;
				height: 100%;
				width: 100%;
			}
			[join-now]:after {
				content: " ";
				position: absolute;
				top: 0;
				right: 50%;
				z-index: -1;
				background-color: #f8f8f8;
				height: 100%;
				width: 100%;
			}
			@media (max-width: 768px) {
				[join-now]:before {
					content: none;
				}
				[join-now]:after {
					right: 0;
				}
			}
			.fade-down {
				transform: translateY(-100%);
				opacity: 0;
			}
		</style>
		<div join-now>
			<div class="container mx-auto">
				<div class="flex">
					<div class="flex flex-1 flex-col justify-between py-16 pl-4" data-aos="fade-right">
						<div class="flex flex-col pr-0 lg:pr-40">
							<div class="text-2xl mb-5">
								Join the Business 
							</div>
							<div class="text-4xl md:text-6xl mb-5">
								Revolution with <span class="text-gradient">Snippit!</span>
							</div>
						</div>
						<div class="flex flex-col">
							<div class="text-xl font-semibold mb-10">Providing quality services you can count on.</div>
							<div>
								<a href="<?php echo get_post_permalink(get_page_by_path('/marketplace-snippit-business/', OBJECT, 'page')->ID);?>" class="bg-blue text-white px-10 py-5 rounded-[0.375rem]">Join Now</a>
							</div>
						</div>
					</div>
					<div class="flex-1 hidden md:flex justify-center items-center">
						<div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/join-now.jpg" class="parallax-block">
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php 

	get_footer();
	
	?>
