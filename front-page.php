<?php 


get_header();

?>

	<style>
	[join-now] {
		position: relative;
		/* background: rgb(248,248,248);
		background: linear-gradient(90deg, rgba(248,248,248,1) 0%, rgba(248,248,248,1) 49%, rgba(225,241,254,1) 50%, rgba(225,241,254,1) 100%); */
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
	</style>
		<div class="container mx-auto" hero>
			<style>
				.download {
					border-radius: 50px;
				}
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
			<div class="banner flex items-center justify-center min-h-[80vh] relative text-center truncate whitespace-normal flex-col">
				<div class="w-full md:w-4/6 px-5">
					<div class="text-5xl md:text-7xl mb-5	">
						Search. Compare. Save   
					</div>
					<div class="text-4xl mb-5">On your Essential Services</div>
					<div id="app" class="text-3xl mb-10 font-light"></div>
					<!-- <p class="font-light text-xl mb-16">Wide range of essential services, from energy efficiency to home repairs to medical care and more.</p> -->
				</div>
				<div class="flex flex-col justify-center md:flex-row md:items-center">
					<div>
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
					</div>
					<div>
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
				<div class="absolute hero-blue-square">
					<img class="rotating" src="<?php echo get_stylesheet_directory_uri();?>/images/blue-overlay.png" data-aos="fade-left" data-aos-delay="200">
				</div>
				<div class="absolute hero-green-square">
					<img class="rotating-ccw" src="<?php echo get_stylesheet_directory_uri();?>/images/yellow-overlay.png" data-aos="fade-right">
				</div>
			</div>

		</div>
		<div class="flex justify-center mb-20 md:mb-40 container mx-auto px-5" video>
			<video autoplay muted loop playsinline poster="<?php echo get_stylesheet_directory_uri(); ?>/images/home-poster.png">
				  <source src="<?php echo get_stylesheet_directory_uri(); ?>/images/home.mp4" type="video/mp4">
			</video>
		</div>
		<div class="container mx-auto mb-20 md:mb-40 py-40 relative">
			<style>
				.abs-center {
					transform: translate(-50%, -50%);
					left: 50%;
					top: 50%;
				}
			</style>
			<img src="<?php echo get_stylesheet_directory_uri();?>/images/s.png" class="absolute abs-center">
			<div class="max-w-6xl md:text-3xl mx-auto px-5 text-2xl text-center mb-16 md:leading-loose">
				We exclusively devote ourselves to connecting you with services that meet your budget and exceed your expectations.
			</div>
			<div class="flex flex-col md:flex-row justify-center items-center">
				<button class="download z-10 text-xl shadow px-10 md:px-20 py-2 flex items-center mb-10 md:mb-0 btn-11 bg-white" data-aos="fade-up">
					<div class="z-10">
						<div class="font-semibold">
							<a class="text-xl" href="<?php echo get_site_url() . "/marketplace";?>">Ask Us How</a>
						</div>
					</div>
				</button>
			</div>
		</div>
		<div class="container mx-auto mb-20 md:mb-40 relative" id="features">
			<style>
				.arrowish {
					top: -2px;
					height: calc(100% + 7px);
					right: -30px;
				}
				@media (max-width: 1024px) {
					.marker {
						display: none;
						position: absolute;
						left: -10px;
						transform: rotate(270deg) translateX(50%);
						top: 50%;
					}
					.images-container>div.flex:nth-child(1) {
						top: 0px;
						left: 0px;
					}
				}
				.images-container .color-line {
					height: 1px;
					width: calc(100% + 100px);
					position: relative;
				}
				.images-container .color-line::after, .images-container .color-line::before {
					content: " ";
					position: absolute;
					background: inherit;
					height: 10px;
					border-radius: 50%;
					width: 10px;
					transform: translateY(-50%);
				}
				.images-container .color-line::before {
					left: 0;
				}
				.images-container .color-line::after {
					right: 0;
				}

				.images-container>.flex:nth-child(1) .color-line {
					background: #32d0d1; /* cyan */
					left: -60px;
				}
				.images-container>.flex:nth-child(2) .color-line {
					background: #97dc21; /* green */
					left: -60px;
				}
				.images-container>.flex:nth-child(3) .color-line {
					right: -60px;
					background: #fed000; /* yellow */
				}
				.images-container .flex .image{
					z-index: -1;
				}
				@media not all and (min-width: 640px) {
					
				}

				@media not all and (min-width: 1024px) {
					.images-container>.flex:nth-child(1) .color-line {
						right: -60px;
						left: initial;
					}
				}
				@media not all and (max-width: 1024px) {
					.images-container {
						top: -100px;
						position: relative;
					}
					.images-container>.flex:nth-child(1) {
						top: 100px;
						left: 100px;
					}
					.images-container>.flex:nth-child(2) .image img {
						transform: skewY(5deg);
					}
					.images-container>.flex:nth-child(3) .image img {
						transform: skewY(-5deg);
					}
				}
			</style>
			<div class="flex justify-between px-5 mb-5">
				<div class="marker" data-aos-delay="100" data-aos="fade-down">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/green.png" class="max-w-[60px]">
				</div>
				<div class="marker" data-aos-delay="300" data-aos="fade-down">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/yellow.png" class="max-w-[60px]">
				</div>
				<div class="marker" data-aos-delay="500" data-aos="fade-down">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cyan.png" class="max-w-[60px]">
				</div>
				<div class="marker" data-aos-delay="700" data-aos="fade-down">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue.png" class="max-w-[60px]">
				</div>
			</div>
			<div class="flex flex-col lg:flex-row px-5" data-aos="fade-right" data-aos-delay="50">
				<div class="w-full lg:w-72 text-3xl flex flex-col relative items-center mb-10 justify-center">
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
				<div class="flex flex-col flex-wrap justify-center lg:flex-row w-full z-10 images-container">
					<div class="flex justify-center px-5 relative w-full mb-10">
						<div class="lg:w-3/6 flex flex-col-reverse md:flex-row-reverse lg:flex-row items-center">
							<div class="image" data-aos="fade-up" data-aos-offset="200">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/right.png" class="max-w-[190px] mb-5">
							</div>
							<div class="flex flex-col items-center justify-center pb-6 text-center xl:px-10">
								<div class="font-bold mb-3 text-xl" data-aos-delay="100" data-aos="fade-left">
									Never Miss a Beat with Snippit!
								</div>
								<div class="color-line mb-3 hidden md:block" data-aos-delay="200" data-aos="fade-left"></div>
								<p data-aos-delay="300" data-aos="fade-left">Our easy-to-use platform simplifies scheduling and setting up essential services so you can focus on what matters.</p>
							</div>
						</div>
					</div>
					<div class="flex flex-col-reverse md:flex-row items-center relative px-5 w-full lg:w-3/6 mb-10 md:mb-0">
						<div class="image" data-aos="fade-right" data-aos-offset="200">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/left.png" class="max-w-[190px] mb-5">
						</div>
						<div class="flex flex-col items-center justify-center pb-6 text-center xl:px-10">
							<div class="font-bold mb-3 text-xl" data-aos-delay="400" data-aos="fade-left">
								Your One-Stop Shop
							</div>
							<div class="color-line mb-3 hidden md:block" data-aos-delay="500" data-aos="fade-left"></div>
							<p data-aos-delay="600" data-aos="fade-left">Snippit has everything you need for a simplified life, from energy efficiency to home repairs, and even healthcare services.</p>
						</div>
					</div>
					<div class="flex flex-col md:flex-row items-center relative px-5 w-full lg:w-3/6 ">
						<div class="flex flex-col items-center justify-center pb-6 text-center xl:px-10">
							<div class="font-bold mb-3 text-xl" data-aos-delay="700" data-aos="fade-right">
								Get The Right Pro For The Job!
							</div>
							<div class="color-line mb-3 hidden md:block" data-aos-delay="800" data-aos="fade-right"></div>
							<p data-aos-delay="900" data-aos="fade-right">Snippit lets you easily connect with qualified and certified professionals for any task at hand.</p>
						</div>
						<div class="image" data-aos="fade-left" data-aos-offset="200">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/center.png" class="max-w-[190px] mb-5">
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="container mx-auto mb-20 md:mb-40 py-10 px-5" id="how-it-works">
			<style>
				.block .curve {
					border-radius: 3vw;
					overflow: hidden;
				}
			</style>
			<div class="text-xl md:text-3xl font-bold pl-0 md:pl-10">How it Works</div>
			<div class="flex flex-wrap">
				<div class="aos-animate aos-init block flex flex-col justify-center text-center w-3/6" data-aos="fade-right" data-aos-offset="300">
					<div class="m-4 md:ml-32">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/block-1.jpg" class="parallax-block">
					</div>
					<div class="md:ml-32 md:text-xl mr-4">Sign up in a snap and access Snippit's power-packed app.</div>
				</div>
				<div class="aos-animate aos-init block flex flex-col justify-center text-center w-3/6 mt-14 md:mt-28" data-aos="fade-left" data-aos-offset="300">
					<div class="m-4 md:mr-32">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/block-2.jpg" class="parallax-block">
					</div>
					<div class="md:mr-32 md:text-xl ml-4">Pick from our range of essential services tailored to your needs.</div>
				</div>
				<div class="aos-animate aos-init block flex flex-col justify-center text-center w-3/6" data-aos-offset="300">
					<div class="m-4 md:ml-32">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/block-3.jpg" class="parallax-block">
					</div>
					<div class="md:ml-32 md:text-xl mr-4">Self-assess like a pro with Snippit’s user-friendly interface.</div>
				</div>
				<div class="aos-animate aos-init block flex flex-col justify-center text-center w-3/6 mt-14 md:mt-28" data-aos-offset="300">
					<div class="m-4 md:mr-32">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/block-4.jpg" class="parallax-block">
					</div>
					<div class="md:mr-32 md:text-xl ml-4">Stay updated on the go with timely alerts for your selected service.</div>
				</div>
			</div>
		</div>
		<div join-now>
			<div class="container mx-auto">
				<div class="flex">
					<div class="flex flex-1 flex-col justify-between py-16 pl-4">
						<div class="flex flex-col pr-0 lg:pr-40">
							<div class="text-2xl mb-5">
								Join the Business 
							</div>
							<div class="text-6xl">
								Revolution with Snippit!
							</div>
						</div>
						<div class="flex flex-col">
							<div class="text-xl font-semibold mb-10">Providing quality services you can count on.</div>
							<div>
								<a href="<?php echo get_post_permalink(get_page_by_path('/marketplace/', OBJECT, 'page')->ID);?>" class="bg-blue text-white px-10 py-5">Join Now</a>
							</div>
						</div>
					</div>
					<div class="flex-1 hidden md:flex justify-center items-center">
						<div>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/join-now.jpg">

						</div>
					</div>
				</div>
			</div>
		</div>

	<?php 

	get_footer();
	
	?>
