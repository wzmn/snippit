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
				.back-cover{
					background-image: url(<?php echo get_stylesheet_directory_uri() . "/images/logo-bg.png"; ?>);
					background-position: right top 84px;
					/* background-position: left 20px bottom 10px; */
					background-repeat: no-repeat;
				}
			</style>
			<div class="banner relative flex justify-center md:min-h-[620px]">
				<div class="w-full md:w-4/6 px-5 text-center pt-5">
					<div class="text-3xl md:text-4xl xl:text-6xl mb-2 md:mb-5 fade-down font-semibold">
						Search. Compare. Save   
					</div>
					<div class="text-2xl md:text-4xl mb-2 md:mb-5 fade-down">On the Path to an Electrified Future</div>
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
		<div class="flex justify-center mb-20 md:mb-24 container mx-auto px-5" video>
			<video autoplay muted loop playsinline poster="<?php echo get_stylesheet_directory_uri(); ?>/images/home-poster.png">
				<source src="<?php echo get_stylesheet_directory_uri(); ?>/images/home.mp4" type="video/mp4">
			</video>
		</div>

		<div class="container flex justify-center mb-[7rem] md:mb-[6rem] mx-auto back-cover" ask-how>
			<style>
				.headfont{
					font-size: 20px;
					color: #656565;
				}
				.absoluteimg1{
					left: 2.75rem;
					top: 0.75rem;
				}
				.absoluteimg2{
					left: 1.5rem;
					top: 1rem;
				}
				.absoluteimg3{
					left: 4.75rem;
					top: 1.25rem;
				}
				.block2text{
					padding: 0 3rem;
				}
				@media (min-width: 768px) {
					.absoluteimg1{
						left: 4rem;
						top: 1.15rem;
					}
					.absoluteimg2{
						left: 2.2rem;
						top: 1.5rem;
					}
					.absoluteimg3{
						left: 7rem;
						top: 2rem;
					}
					.block2text{
						padding: 0 5.5rem;
					}
					.block2{
						align-self: flex-end;
					}					
				}
				.img-rounded{
					border-radius: 8px; 
				}
				.flexy-div-1{
					background-image: url(<?php echo get_stylesheet_directory_uri() . "/images/block-7.png"; ?>);
					background-repeat: no-repeat;
					background-size: contain;
					width: 100%;
					height: 100%;
				}
				.feature-cover1{
					background-image: url(<?php echo get_stylesheet_directory_uri() . "/images/block-7.png"; ?>);
					background-repeat: no-repeat;
					background-size: contain;
				}
				.new-class {
					background-image: url(<?php echo get_stylesheet_directory_uri() . "/images/block-7.png"; ?>);
					background-size: contain;
					background-repeat: no-repeat;
					background-position-x: right;
					background-color: #e2f2ff;
					width: 500px;
					text-align: center;
					padding-top: 30px;
					padding-bottom: 30px;
					padding-left: 30px;
					margin: auto;
					margin-bottom: 30px;
				}
				.back-cover2{
					background-image: url(<?php echo get_stylesheet_directory_uri() . "/images/block-7.png"; ?>);
					background-repeat: no-repeat;
					background-size:100% 100%;
					/* height: 380px; */
				}
				.back-cover3{
					background-image: url(<?php echo get_stylesheet_directory_uri() . "/images/block-8.png"; ?>);
					background-repeat: no-repeat;
					background-size: 100% 103.3%;
				}
				.back-cover4{
					background-image: url(<?php echo get_stylesheet_directory_uri() . "/images/block-9.png"; ?>);
					background-repeat: no-repeat;
					background-size:100% 100%;
					height: 175px;
				}
				@media screen and (max-width: 768px){
					.back-cover2{
						background-image: url(<?php echo get_stylesheet_directory_uri() . "/images/block-7.png"; ?>);
						background-repeat: no-repeat;
						background-size:100% 100%;
						/* height: 380px; */
						margin-bottom: 1.25rem;
						width: 100%;
					}
					.back-cover3{
						background-image: url(<?php echo get_stylesheet_directory_uri() . "/images/block-8.png"; ?>);
						background-repeat: no-repeat;
						background-size: 100% 100%;
						width: 100%;
					}
				}
				@media screen and (min-width: 768px){
					.back-cover4{
						background-image: url(<?php echo get_stylesheet_directory_uri() . "/images/block-9.png"; ?>);
						background-repeat: no-repeat;
						background-size:100% 100%;
						height: 314px;
					}
				}
			</style>
			<div class="flex relative justify-center">
			<div class="lg:max-w-[60%] w-full px-5 ">
				<div><img alt="logo" class="w-24 my-[2.25rem] mx-auto" src="<?php echo get_stylesheet_directory_uri() . "/images/snippit-blue.png"; ?>"></div>
				<div class="text-[20px] mb-2 text-center text-[#656565] italic" data-aos="fade-up">Know About Snippit Services</div>
				<div class="text-3xl mb-3 px-10 lg:px-0 font-semibold text-center" data-aos="fade-up">Solutions to make life <span class="text-blue">easier</span></div>
				<div class="flex items-center justify-center flex-col md:flex-row px-6 text-center" data-aos="fade-up">
					<p class="w-full mx-auto">Snippit's essential services deliver unparalleled value, making your everyday essentials extraordinary. <!-- span><a class="py-3 px-8 bg-gradient-to-r from-[#8FD520] to-[#FED000] text-white rounded-br-[24px] absolute mt-2 ml-3">Ask Us How</a></span --></p>
				</div>
				<div class="flex justify-center flex-col items-center sm:flex-row sm:items-start text-xs font-light pb-4" data-aos="fade-up">
					<div class="flex">
						<div class="flex flex-col items-center">
							<img alt="logo" class="max-w-[90px] mx-3.5 img-rounded mt-2" src="<?php echo get_stylesheet_directory_uri() . "/images/logo-yellow2.png"; ?>">
							Energy Efficiency
						</div>
						<div class="flex flex-col items-center">
							<img alt="logo" class="max-w-[90px] mx-3.5 img-rounded mt-2" src="<?php echo get_stylesheet_directory_uri() . "/images/logo-blue2.png"; ?>">Construction
						</div>
					</div>
					<div class="flex">
						<div class="flex flex-col items-center">
							<img alt="logo" class="max-w-[90px] mx-3.5 img-rounded mt-2" src="<?php echo get_stylesheet_directory_uri() . "/images/logo-green2.png"; ?>">Medical
						</div>
						<div class="flex flex-col items-center">
							<img alt="logo" class="max-w-[90px] mx-3.5 img-rounded mt-2" src="<?php echo get_stylesheet_directory_uri() . "/images/logo-cyan2.png"; ?>">Supermarket
						</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container mx-auto mb-24 md:mb-24 flex items-center flex-col px-5" id="features">
			<div class="text-[20px] mb-2 text-[#656565] text-left italic" data-aos="fade-up">Features</div>
			<div class="mb-8 font-semibold text-3xl text-center" data-aos="fade-up">Solutions that fit your <span class="text-lime">specific needs</span></div>
			<div class="flex flex-col lg:max-w-[80%] rows">

				<div class="flex flex-col md:flex-row mb-3 items-center h-[615px] md:h-[380px] md:w-[660px]">
					<div class="flex-col flex md:w-[50%] flex-1 grow h-full back-cover2 md:mr-2">
						<div class="flex flex-col grow items-center">
								<div class="flex flex-row lg:max-w-[100%] mt-8 -mb-6">
									<img alt="logo" class="w-4 h-4 mb-[2.25rem] mr-2" src="<?php echo get_stylesheet_directory_uri() . "/images/snippit_aqua.png"; ?>" data-aos="fade-up">
									<div class="text-xs font-semibold mb-2 text-center text-[#656565]" data-aos="fade-up">Future Energy</div>
								</div>
								<div class="max-w-[60%] font-medium text-sm text-center" data-aos="fade-up">
									Brings smarts to energy efficiency!
								</div>
						</div>
					</div>
					
					<div class="flex-col flex md:w-[50%] flex-1 grow h-full back-cover3 md:ml-2">
							<div class="flex flex-col grow items-center">
								<div class="flex flex-row lg:max-w-[100%] mt-8 -mb-6">
									<img alt="logo" class="w-4 h-4 mb-[2.25rem] mr-2" src="<?php echo get_stylesheet_directory_uri() . "/images/snippit_green.png"; ?>" data-aos="fade-up">
									<div class="text-xs font-semibold mb-2 text-center text-[#656565]" data-aos="fade-up">Efficient Upgrades</div>
								</div>
								<div class="max-w-[60%] font-medium text-sm text-center" data-aos="fade-up">
									Choose Upgrades That Speak to You!
								</div>
							</div>
					</div>
				</div>

				<div class="flex flex-col w-[100%] flex-1 grow h-full back-cover4">
					<div class="flex flex-col grow items-center h-[165px] md:h-[314px]">
						<div class="flex flex-row lg:max-w-[100%] mt-4 md:mt-12 -mb-8">
							<img alt="logo" class="w-4 h-4 mb-[2.25rem] mr-2" src="<?php echo get_stylesheet_directory_uri() . "/images/snippit_aqua.png"; ?>" data-aos="fade-up">
							<div class="text-xs font-semibold mb-2 text-center text-[#656565]" data-aos="fade-up">Future Energy</div>
						</div>
						<div class="max-w-[60%] font-medium text-sm text-center" data-aos="fade-up">
							Snippit Intelligence to Energy Efficiency!
						</div>
					</div>
				</div>
				
			</div>
		</div>
		<div class="container mx-auto mb-20 md:mb-20 pb-10 px-5" id="how-it-works">
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
				.round-cards{
					border-radius: 0.75rem;
					width: 210px;
					/* height: 192px; */
					/* height: 185px; */
					padding: 1.25rem 0.75rem 0.75rem 1.25rem;
					margin: 0.65rem;
					flex-shrink: 0;
				}
				.slides-wrapper{
					max-width: 1220px;
					/* border: 1px solid red; */
					padding: 15px;
					/* height: 250px; */
					/* align: center; */
				}
				.slides{
					width: 950px;
					margin: 0 auto;
					justify-content: space-between;
					/* border: 1px solid yellow; */
					/* height: 250px; */
				}
				.slides-nav{
					display: none;
				}
				@media screen and (max-width: 768px){
					.slides-wrapper{
						/* max-width: 250px; */
						position: relative;
						max-width: 280px;
						margin: 0 auto;
						/* border: 1px solid green; */
					}
					.slides{
						/* width: 250px; */
						width: 290px;
						overflow-x: auto;
						scroll-snap-type: x mandatory;
            			scroll-behavior: smooth;
						/* border: 1px solid blue; */
					}
					.slider div{
						/* flex: 1 0 100%; */
						scroll-snap-align: start;
						/* object-fit: cover; */
					}
					.slides-nav{
						display:none;
						/* display: flex;
						column-gap: 1rem;
						position: absolute;
						left: 50%;
						transform: translateX(-50%);
						z-index: 1; */
					}
					.slides-nav a{
						width: 0.5rem;
						height: 0.5rem;
						border-radius: 50%;
						background-color: gray;
						opacity: 0.75;
						transition: opacity ease 250ms;
					}
					.slides-nav a:hover{
						opacity: 1;
						background-color: blue;
					}
					/* ::-webkit-scrollbar {
						width: 0px;
						background: transparent; //make scrollbar transparent
					} */
				}

			</style>
			<div class="flex flex-col justify-center w-full items-center">
			<!-- <div class="flex flex-col justify-center w-full mb-10"> -->
				<!-- <div class="text-[20px] mb-2 text-center text-[#656565] italic" data-aos="fade-left">How it Works</div> -->
				<div class="text-[20px] mb-2 text-[#656565] italic px-10" data-aos="fade-left">How it Works</div>
				<div class="flex flex-col sm:flex-row items-baseline text-3xl mb-4 px-10 text-center">
					<div class="font-semibold mr-2" data-aos="fade-right">Functional.</div>
					<div class="font-bold text-cyan" data-aos="fade-up">Simple</div>
				</div>
				<!-- <div class="flex border border-black p-4 justify-center"> -->
				<div class="slides-wrapper">
					<div class="flex slides">
						<div id="slide-1" class="flex flex-col round-cards shadow">
							<img src="<?php echo get_stylesheet_directory_uri() . "/images/card-icon-1.png"; ?>" alt="icon" class="w-[3rem]">
							<div class="font-semibold mb-4">Sign in to app</div>
							<p class="text-xs">Sign up in a snap and access Snippit's power-packed app.</p>
							<div class="flex w-[1rem] self-end mt-[1rem]">
								<img src="<?php echo get_stylesheet_directory_uri() . "/images/snippit_orange.png"; ?>" alt="logo">
							</div>
						</div>
						<div id="slide-2" class="flex flex-col round-cards shadow">
							<img src="<?php echo get_stylesheet_directory_uri() . "/images/card-icon-2.png"; ?>" alt="icon" class="w-[3rem]">
							<div class="font-semibold mb-4">Select the upgrades</div>
							<p class="text-xs">Pick from our range of essential services tailored to your needs.</p>
							<div class="flex w-[1rem] self-end">
								<img src="<?php echo get_stylesheet_directory_uri() . "/images/snippit_blue.png"; ?>" alt="logo">
							</div>
						</div>
						<div id="slide-3" class="flex flex-col round-cards shadow">
							<img src="<?php echo get_stylesheet_directory_uri() . "/images/card-icon-3.png"; ?>" alt="icon" class="w-[3rem]">
							<div class="font-semibold mb-4">Make the payment</div>
							<p class="text-xs">Experience hassle-free payment for seamless upgrade.</p>
							<div class="flex w-[1rem] self-end">
								<img src="<?php echo get_stylesheet_directory_uri() . "/images/snippit_green.png"; ?>" alt="logo">
							</div>
						</div>
						<div id="slide-4" class="flex flex-col round-cards shadow">
							<img src="<?php echo get_stylesheet_directory_uri() . "/images/card-icon-4.png"; ?>" alt="icon" class="w-[3rem]">
							<div class="font-semibold mb-4">Installation done</div>
							<p class="text-xs">Enjoy seamless installations by our qualified professionals.</p>
							<div class="flex w-[1rem] self-end">
								<img src="<?php echo get_stylesheet_directory_uri() . "/images/snippit_aqua.png"; ?>" alt="logo">
							</div>
						</div>
					</div>

					<div class="slides-nav">
						<a href="#slide-1"></a>
						<a href="#slide-2"></a>
						<a href="#slide-3"></a>
						<a href="#slide-4"></a>
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
			<div class="container mx-auto mb-8 md:mb-8">
				<div class="flex">
					<div class="flex flex-1 flex-col justify-between pt-8 pb-12 pl-4" data-aos="fade-right">
						<div class="flex flex-col pr-0 lg:pr-40">
							<div class="text-[1.25rem] mb-0">
								Join the Business 
							</div>
							<div class="text-xl md:text-3xl font-semibold mb-5">
								Revolution with Snippit!
							</div>
						</div>
						<div class="flex flex-col">
							<div class="mb-8">Providing quality services you can count on.</div>
							<div>
								<a href="<?php echo get_page_by_path('/marketplace-snippit-business/', OBJECT, 'page') ? get_post_permalink(get_page_by_path('/marketplace-snippit-business/', OBJECT, 'page')->ID) : "#";?>" class="bg-blue text-white px-10 py-5 rounded-[0.375rem]">Join Now</a>
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
			<!--img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer.png" class="-m-6 max-w-[400px] rounded-sm"-->
	<?php 

	get_footer();
	
	?>
