<?php 


get_header();

?>
		<div class="container mx-auto" hero>
			<style>
				.hero-blue-square, .hero-green-square {
					/* z-index: -1; */
				}
				.hero-blue-square {
					top: 50%;
					left: 250px;
					transform: translate(-50%, -50%);
					max-width: 500px;
				}
				.hero-green-square {
					top: 50%;
					right: 250px;
					transform: translate(50%, -50%);
					max-width: 500px;
				}

			</style>
			<div class="banner flex items-center justify-center min-h-[80vh] relative text-center truncate whitespace-normal">
				<div class="w-full md:w-4/6">
					<div class="font-light mb-10">YOUR DAILY NEEDS, JUST A CLICK AWAY</div>
					<div class="text-5xl md:text-7xl">
						Essential Services, Simplified
					</div>
				</div>
				<div class="absolute hero-blue-square">
					<img src="<?php echo get_stylesheet_directory_uri();?>/images/blue-overlay.png" data-aos="fade-left" data-aos-delay="200">
				</div>
				<div class="absolute hero-green-square">
					<img src="<?php echo get_stylesheet_directory_uri();?>/images/yellow-overlay.png" data-aos="fade-right">
				</div>
			</div>

		</div>
		<!-- <div class="container mx-auto mb-20 md:mb-40" section2>
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
		</div> -->
		<div class="container mx-auto mb-20 md:mb-40" parallax>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/parallax.png" class="parallax">
		</div>
		<div class="container mx-auto mb-20 md:mb-40 relative" features id="features">
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
			<div class="flex md:min-h-[400px] shadow flex-col lg:flex-row" data-aos="fade-right" data-aos-delay="50">
				<div class="w-full lg:w-72 text-3xl px-10 flex flex-col relative items-center mb-10 justify-between">
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
				<div class="flex w-full z-10 flex-col lg:flex-row pr-0 lg:pr-20">
					<div class="flex flex-col items-center relative px-20 lg:px-2 w-full lg:w-1/3">
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
					<div class="flex flex-col items-center relative px-20 lg:px-2 w-full lg:w-1/3">
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
					<div class="flex flex-col items-center relative px-20 lg:px-2 w-full lg:w-1/3">
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
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-shadow.png" class="absolute h-full arrowish z-0 hidden xl:block"  data-aos="fade-right" data-aos-delay="150">
		</div>
		<div class="container mx-auto mb-20 md:mb-40 py-10 shadow px-5" how-it-works id="how-it-works">
			<style>
				.block .curve {
					border-radius: 3vw;
					overflow: hidden;
				}
			</style>
			<div class="text-xl md:text-3xl font-bold pl-0 md:pl-10">How it Works</div>
			<div class="flex flex-wrap">
				<div class="aos-animate aos-init block flex flex-col justify-center text-center w-3/6" data-aos="fade-right" data-aos-offset="300">
					<div class="m-4 md:ml-32 curve">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hiw-1.png" class="parallax-block">
					</div>
					<div class="md:text-xl">All your essential services in one tap</div>
				</div>
				<div class="aos-animate aos-init block flex flex-col justify-center text-center w-3/6 mt-14 md:mt-28" data-aos="fade-left" data-aos-offset="300">
					<div class="m-4 md:mr-32 curve">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hiw-2.png" class="parallax-block">
					</div>
					<div class="md:text-xl">Login made easy. Effortless access to everything.</div>
				</div>
				<div class="aos-animate aos-init block flex flex-col justify-center text-center w-3/6" data-aos-offset="300">
					<div class="m-4 md:ml-32 curve">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hiw-3.png" class="parallax-block">
					</div>
					<div class="md:text-xl">Sign up in seconds, book an appointment</div>
				</div>
				<div class="aos-animate aos-init block flex flex-col justify-center text-center w-3/6 mt-14 md:mt-28" data-aos-offset="300">
					<div class="m-4 md:mr-32 curve">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hiw-4.png" class="parallax-block">
					</div>
					<div class="md:text-xl">Upgrade your energy, upgrade your life</div>
				</div>
			</div>
		</div>
		<!-- <div class="container mx-auto mb-20 md:mb-40" testimonials>
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
						<div class="mb-10 md:mb-0 w-4/5 md:w-1/3">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial.jfif" alt="">
						</div>
						<div class="flex flex-col justify-center px-0 md:px-20 w-2/3">
							<div class="mb-10 text-2xl">
								"The happy customer, an often untapped marketing asset, can play a powerful role in the success of a business."
							</div>
							<div class="text-blue">
								— Jamie John
							</div>
						</div>
					</div>
					<div class="flex flex-col md:flex-row px-8 items-center">
						<div class="mb-10 md:mb-0 w-4/5 md:w-1/3">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/testimonial.jfif" alt="">
						</div>
						<div class="flex flex-col justify-center px-0 md:px-20 w-2/3">
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
					<svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/></svg>
				</div>
				<div class="test-right" data-aos="fade-left" data-aos-delay="200">
					<svg width="30" height="30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg>
				</div>
			</div>
		</div> -->

		<div class="container mx-auto mb-20 md:mb-40 shadow" download-now>
			<style>
				.download {
					border-radius: 50px;
				}
			</style>
			<div class="flex flex-col items-center py-20 md:py-48">
				<div class="mb-10 text-4xl md:text-8xl" data-aos="fade-up">Download Now</div>
				<div class="flex flex-col md:flex-row">
					<button class="download text-xl shadow px-10 md:px-20 py-2 flex items-center mr-0 md:mr-20 mb-10 md:mb-0" data-aos="fade-up"  data-aos-delay="200">
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
					<button class="download text-xl shadow px-10 md:px-20 py-2 flex items-center" data-aos="fade-up"  data-aos-delay="400">
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
		<div class="container mx-auto md:mb-40 p-10 shadow" join-now>
			<style>
				/* .blue-corner, .green-corner, .blue-square, .green-square {
					z-index: -1;
				} */
				.blue-corner {
					max-width: 100px;
					right: 0;
					top: 0;
				}
				.green-corner {
					max-width: 100px;
					left: 0;
					bottom: 0;
				}
				.blue-square {
					top: 50%;
					left: 25%;
					transform: translate(-50%, -50%);
					max-width: 500px;
				}
				.green-square {
					top: 50%;
					right: 25%;
					transform: translate(50%, -50%);
					max-width: 500px;
				}

			</style>
			<div class="flex flex-col items-center py-20 md:py-36 relative">
				<div class="mb-5 text-3xl md:text-3xl font-light" data-aos="fade-up">Collaborate, upgrade, and grow with Snippit.</div>
				<div class="mb-10 text-3xl md:text-3xl font-light" data-aos="fade-up">The marketplace for energy efficiency buyers and sellers!</div>
				<div class="flex flex-col md:flex-row">
					<button class="download text-xl shadow px-10 md:px-20 py-2 flex items-center mr-5 md:mr-20 mb-10 md:mb-0" data-aos="fade-up">
						<div>
							<div class="font-semibold">
								<a class="text-xl" href="<?php echo get_site_url() . "/marketplace";?>">Join Now</a>
							</div>
						</div>
					</button>
				</div>
				<div class="absolute blue-corner">
					<img src="<?php echo get_stylesheet_directory_uri();?>/images/corner-blue.png" data-aos="fade-left">
				</div>
				<div class="absolute green-corner">
					<img src="<?php echo get_stylesheet_directory_uri();?>/images/corner-green.png" data-aos="fade-right">
				</div>
				<div class="absolute blue-square">
					<img src="<?php echo get_stylesheet_directory_uri();?>/images/blue-overlay.png" data-aos="fade-left">
				</div>
				<div class="absolute green-square">
					<img src="<?php echo get_stylesheet_directory_uri();?>/images/green-overlay.png" data-aos="fade-right">
				</div>
			</div>
		</div>
	<?php 

	get_footer();
	
	?>
