<?php 

	/* Template Name: Market Place */ 
	get_header();
	if ( have_posts() ) :
    	while ( have_posts() ) : the_post();
 ?>
		<div class="container mx-auto mb-40" hero>
			<div class="banner flex items-center justify-center min-h-[400px] relative text-center truncate whitespace-normal">
				<div class="w-full md:w-4/6">
					<div class="font-light mb-10">SNIPPIT BUSINESSES</div>
					<div class="text-7xl">
						Join the Business Revolution with Snippit!
					</div>
				</div>
			</div>
		</div>
		<div class="container mx-auto mb-40" parallax>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/parallax.jpeg" class="parallax">
		</div>
		<style>
			.image-container {
				width: 100%;
				max-width: 350px;
				right: 1rem;
				overflow: hidden;
			}
			.panel-text {
				width: 100%;
				transform: translateY(100%);
				opacity: 0;
				position: absolute;
				height: 100%;
			}
			.panel-text:before {
				content: " ";
				background: url('<?php echo get_stylesheet_directory_uri();?>/images/square-overlay.png');
				position: absolute;
				height: 100px;
				width: 100px;
			}
			.text-container {
				position: relative;
				width: 100%;
			}
			.panel-text-1 {
				opacity: 1;
				transform: translateY(0%);
			}
			.image-container > img {
				transition: all 0.3s ease;
				filter: none;
				background: white;
			}
			.image-container > img.wavy {
				filter: url(#wavy);
			}
			.image-container > img:hover {
				transform:scale(1.1) skewY(-4deg) rotate(1deg);
			}
			#pin {
				height: 650px;
			}
			.smiley {
				width: 180px;
				height: 185px;
				padding: 60px 50px;
				background-color: #FED000;
				border-radius: 20px;
				position: absolute;
				left: 1rem;
   				top: -1rem;
			}
		</style>
		<div class="container mx-auto mb-40">

			<div class="relative flex justify-between" id="pin">
				<div class="smiley">
					<svg id="smiley" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 509.75 536.55">
						<defs>
							<style>
							.eye-right-0, .eye-left-0, .smile-0, .eye-left-1, .smile-1, .eye-right-1 {
								fill: white;
								stroke: #000;
								stroke-miterlimit: 10;
								stroke-width: 16px;
							}
							.fill-black {
								fill: black;
							}
							.pupil-left-0, .pupil-right-0, .pupil-left-1, .pupil-right-1 {
								
							}
							.smile-0, .smile-1 {
								stroke-linecap: round;
								fill: none;
								stroke-width: 16px;
							}
							</style>
						</defs>
						<g id="Layer_1-2" data-name="Layer 1">
							<g>
								<path class="smile-0" d="m156.35,526.22s227.06,33.79,296.03-155.87"/>
							
								<path class="eye-left-0" d="m125.78,8.78c-8.06-1.75-16.47-.49-23.89,3.12C80.37,22.38,19.8,59.55,8.69,150.08c-13.57,110.49,178.33,93.04,186.08,36.83,7.06-51.19-16.42-166.69-68.99-178.13Z"/>
								<circle class="pupil-left-0 fill-black" cx="114.91" cy="63.47" r="18.38"/>

								<path class="eye-right-0" d="m374.65,8.49c-22.87,2.61-68.88,70.6-55.65,166.03,5,36.06,117.83,82.63,172.9,8.4,7.74-10.43,11.09-23.46,9.44-36.35C495.83,103.49,448.55.04,374.65,8.49Z"/>
								
								<circle class="pupil-right-0 fill-black" cx="394.91" cy="58.47" r="18.38"/>
							</g>
						</g>
						<g style="visibility: hidden;">
							<path class="smile-1" d="m186.56,429.88s76,132,343,46"/>
							<path class="eye-left-1" d="m8.52,104.88S21.67,24.52,88.88,15.75c63.13-8.23,176.52,50.56,184.02,119.47.77,7.04-5.24,12.98-12.29,12.3L28.97,125.33s-24.84-2.92-20.46-20.46Z"/>
							<path class="eye-right-1" d="m415.5,135.42c41.21-54.58,193.65-234.44,280.95-37.43,2.04,4.61-.81,9.92-5.78,10.78-31.47,5.42-136.66,23-268.03,39.05-6.81.83-11.28-6.92-7.14-12.4Z"/>
							<circle class="pupil-left-1" cx="163" cy="80" r="18.22"/>
							<circle class="pupil-right-1" cx="606.59" cy="76.59" r="18.22"/>
						</g>
						<g style="visibility: hidden;">
							<path class="smile-2" d="m481.81,457.57c-16.32,16.31-34.8,27.44-54.85,34.57-20.05,7.12-41.69,10.22-64.12,10.22-32.62,0-66.87-6.57-99.83-16.53-49.44-14.94-95.95-37.48-130-56.28-17.03-9.4-30.94-17.86-40.58-23.95-4.82-3.05-8.57-5.51-11.11-7.19-1.27-.84-2.23-1.5-2.87-1.93-.32-.22-.56-.38-.72-.49l-.22-.15c-3.45-2.4-8.19-1.55-10.59,1.9-2.4,3.45-1.55,8.19,1.9,10.59h0c.22.15,39.27,27.31,95.4,54.55,28.07,13.62,60.42,27.26,94.39,37.53,33.97,10.26,69.57,17.18,104.24,17.19,23.82,0,47.22-3.28,69.22-11.1,21.99-7.81,42.57-20.19,60.51-38.15,2.97-2.97,2.97-7.79,0-10.76-2.97-2.97-7.79-2.97-10.76,0Z"/>
							<path class="eye-right-2" d="m535.94,23.25c-11.71-5.12-25.2-8.03-40.49-8.03-1.74,0-3.51.04-5.3.12l-.46.05c-.46.05-1.16.14-2.08.29-1.84.29-4.52.82-7.68,1.72-6.34,1.8-14.58,5.11-22.09,10.92-5.01,3.88-9.72,8.85-13.51,15.33-5.04,8.65-8.57,20.09-8.58,35.79,0,12.25,2.19,27.07,7.63,44.89,6.79,22.22,17,36.74,28.58,45.81,11.6,9.05,24.78,12.9,38.47,12.92,14.44.01,29.36-4.44,42.32-11.83,12.97-7.36,23.91-17.65,30.58-28.71,4.46-7.38,7.03-15.03,7.4-22.44.1-2.01.15-4.01.15-6,0-19.97-5.03-38.92-14.39-54.7-9.37-15.79-22.99-28.44-40.54-36.12Z"/>
							<path class="eye-left-2" d="m163.59,45.97c-.29-.47-.75-1.19-1.37-2.09-1.23-1.8-3.1-4.35-5.55-7.18-4.89-5.66-12.1-12.36-20.93-16.64-5.9-2.87-12.47-4.71-19.85-4.71-3.88,0-8.01.51-12.43,1.71l-.54.15-.55.07h-.04s-.2.03-.2.03c-.19.02-.48.07-.87.12-.78.12-1.96.3-3.46.58-3.01.55-7.32,1.46-12.4,2.87-10.18,2.8-23.44,7.6-35.52,15.31-8.07,5.13-15.59,11.52-21.52,19.39-7.88,10.52-13.1,23.56-13.13,40.9,0,10.8,2.1,23.3,7.12,37.75.09.17.18.34.33.61.4.73,1.02,1.83,1.85,3.2,1.66,2.74,4.17,6.58,7.47,10.84,6.59,8.53,16.38,18.64,28.61,25.14,8.17,4.35,17.35,7.16,27.77,7.16,11.9-.01,25.63-3.65,41.58-13.83,17.6-11.28,28.24-24.1,34.68-37.11,6.42-13.01,8.63-26.36,8.63-38.63.04-23.42-8.23-42.65-9.4-45.18l-.27-.44Z"/>
							<circle class="pupil-right-2" cx="513.07" cy="99.15" r="19.79"/>
							<circle class="pupil-left-2" cx="99.04" cy="99.15" r="19.79"/>
						</g>
						<g style="visibility: hidden;">
							<path class="smile-3" d="m452.51,327c-220.76,160-368.89,27.68-368.89,27.68,0,0,5.89,143.32,185.89,183.32"/>
							<path class="eye-right-3" d="m497.85,21.6c-10.87-4.75-23.41-7.46-37.61-7.46-1.62,0-3.26.04-4.92.11l-.43.04c-.42.05-1.08.13-1.94.27-1.71.27-4.2.76-7.14,1.6-5.89,1.67-13.55,4.74-20.52,10.14-4.66,3.6-9.03,8.22-12.55,14.24-4.69,8.04-7.96,18.66-7.97,33.24,0,11.38,2.04,25.15,7.09,41.7,6.31,20.64,15.79,34.13,26.55,42.56,10.77,8.41,23.02,11.98,35.73,12,13.42.01,27.27-4.12,39.31-10.98,12.05-6.84,22.21-16.4,28.41-26.67,4.15-6.85,6.53-13.96,6.87-20.85.09-1.86.14-3.72.14-5.57,0-18.55-4.67-36.15-13.36-50.81-8.71-14.67-21.36-26.42-37.66-33.56Z"/>
							<path class="eye-left-3" d="m151.97,42.71c-.27-.44-.7-1.1-1.27-1.94-1.15-1.68-2.88-4.04-5.16-6.67-4.54-5.26-11.24-11.48-19.44-15.46-5.48-2.66-11.58-4.37-18.44-4.38-3.61,0-7.44.48-11.55,1.59l-.5.14-.51.06h-.04s-.18.03-.18.03c-.17.02-.44.06-.81.11-.73.11-1.82.28-3.21.54-2.79.51-6.8,1.36-11.52,2.66-9.45,2.6-21.77,7.06-33,14.22-7.49,4.77-14.48,10.7-19.99,18.01-7.32,9.77-12.17,21.89-12.2,37.99,0,10.03,1.95,21.64,6.62,35.07.08.16.16.31.3.57.37.68.95,1.7,1.72,2.97,1.54,2.54,3.87,6.11,6.94,10.07,6.12,7.92,15.21,17.31,26.58,23.35,7.59,4.04,16.12,6.65,25.8,6.65,11.05-.01,23.81-3.39,38.62-12.85,16.35-10.48,26.23-22.39,32.21-34.47,5.97-12.09,8.02-24.49,8.02-35.88.04-21.76-7.65-39.62-8.73-41.97l-.25-.41Z"/>
							<circle class="pupil-right-3" cx="476.61" cy="92.1" r="18.38"/>
							<circle class="pupil-left-3" cx="92" cy="92.1" r="18.38"/>
						</g>
					</svg>
				</div>
				<div class="flex justify-between flex-col text-container relative">
					<div class="flex flex-col justify-center pr-10 pl-4 panel-text max-w-[40rem] panel-text-1">
						<div class="font-light">Experience Elevated Everywhere</div>
						<div class="text-5xl mb-2">
							Sustainable Future 
						</div>
						<p>Whether you're looking for LED light bulbs, smart thermostats, or energy-effecient appliances, Snippit has got you covered. So why wait? Start making a difference for the planet and your wallet now!</p>
					</div>
					<div class="flex flex-col justify-center pr-10 pl-4 panel-text max-w-[40rem]">
						<div class="font-light">Revolutionizing the Ordinary</div>
						<div class="text-5xl mb-2">
							Stress-Free Appointments
						</div>
						<p>Say goodbye to waiting on hold and playing phone tag with receptionists. Enjoy the convenience of booking appointments anytime, anywhere, with just a few simple</p>
					</div>
					<div class="flex flex-col justify-center pr-10 pl-4 panel-text max-w-[40rem]">
						<div class="font-light">Innovate, Delight, Expderience</div>
						<div class="text-5xl mb-2">
							Assess with ease
						</div>
						<p>Assessing your products has never been easier! With just a few simple steps, you can upgrade your home a or office to bve more enviromentally friendly and cost-effective.</p>
					</div>
					<div class="flex flex-col justify-center pr-10 pl-4 panel-text max-w-[40rem]">
						<div class="font-semibold text-2xl mb-2 mt-28">Let's get Started</div>
						<div class="font-light mb-2">Create your account</div>
						<div>
							<form action="/">
								<label class="mb-2" for="email">
									<div class="mb-3">E-mail</div>
									<input class="border border-[#d4d4d8] mb-2 p-2 w-full" type="email" name="email" />
								</label>
								<label for="password">
									<div class="mb-3">Password</div>
									<input class="mb-10 border border-[#d4d4d8] p-2 w-full" type="password" name="password" value=""/>
								</label>
								<div>
									<input class="bg-blue p-2 text-white w-full" type="submit" value="Sign Up">
								</div>
							</form>
						</div>
					</div>	
				</div>
				<div class="image-container relative">
					<svg class="absolute">
						<filter id="wavy">
							<feTurbulence id="turbulence" numOctaves="1" seed="2" baseFrequency="0.02 0.05"></feTurbulence>
							<feDisplacementMap in="SourceGraphic" in2="NOISE" scale="25"></feDisplacementMap>
							<animate xlink:href="#turbulence" attributeName="baseFrequency" dur="60s" keyTimes="0;0.5;1" values="0.02 0.06;0.04 0.08;0.02 0.06" repeatCount="indefinite"/>
						</filter>
						<defs>
							<pattern id="img1" patternUnits="userSpaceOnUse" x="0" y="0" height="100%" width="100%">
								<image xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/images/block1.jpg"  x="0" y="0" height="650" width="100%" preserveAspectRatio=""/>
							</pattern>
						</defs>
						<rect class="myfill" filter="url(#turbulence)" fill="url(#img1)" width="480" height="650"></rect>
					</svg>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ss-yellow.png" class="absolute im-1"> 
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ss-cyan.png" class="absolute">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ss-green.png" class="absolute">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/block5.png" class="absolute">
				</div>
			</div>
		</div>
		<script>



			document.addEventListener("DOMContentLoaded", function() {
				document.querySelectorAll("circle").forEach( (a) => {
					MorphSVGPlugin.convertToPath(a);
				})

				let smiley = document.querySelector(".smiley");
				let svg = smiley.querySelector("svg");
				let smile = document.querySelector(".smile-0")
				let rightEye = document.querySelector(".eye-right-0")
				let leftEye = document.querySelector(".eye-left-0")
				let leftPupil = document.querySelector(".pupil-left-0")
				let rightPupil = document.querySelector(".pupil-right-0")

				let colors = [
					/*yellow*/ "#fddd46",
					/*cyan*/ "#6bdada",
					/*green*/ "#b1e45b",
					/*blue*/ "#0a84ff"
				];

				let viewBox = [
					/*face1*/ "0 0 509.75 536.55",
					/*face2*/ "0 0 705.12 512.98",
					/*face3*/ "0 0 606.08 560",
					/*face4*/ "0 0 563.01 546",
				]

				window.changeFace = function(i) {
					tl = gsap.timeline();

					tl.to(smiley, {
						background: colors[i],
						duration: 0.5,
					}, 0)
					.to(svg, {
						attr: { 
							// zoom out
							viewBox: "0 0 700 550"
						},
						duration: 0.1,
					}, 0)
					.to(smile, {
						morphSVG:`.smile-${i}`, 
						fill:"transparent", 
						stroke:"black", 
						duration: 0.2,
					}, 1)
					.to(rightEye, {
						morphSVG:`.eye-right-${i}`,
						duration: 0.33,
					}, 0)
					.to(rightPupil, {
						morphSVG:`.pupil-right-${i}`,
						duration: 0.33,
					}, 0)
					.to(leftEye, {
						morphSVG:`.eye-left-${i}`,
						duration: 0.33,
					}, 0)
					.to(leftPupil, {
						morphSVG:`.pupil-left-${i}`,
						duration: 0.33,
					}, 0)
					.to(svg, {
						attr: { 
							viewBox: viewBox[i]
						},
						duration: 0.3,
					}, 3);
				}

				gsap.registerPlugin(ScrollTrigger);

				gsap.set(".image-container>img", {
					zIndex: (i, target, targets) => targets.length - i
				});
				gsap.set(".text-container>div", {
					zIndex: (i, target, targets) => targets.length - i
				});

				var images = gsap.utils.toArray('.image-container>img');
				var texts = gsap.utils.toArray('.text-container>div');
				var backgroundColors = ["#fbf7e3", "#e7efef", "#ecf6da", "#d6e9fb"];

				images.forEach((image, i) => {
					if ( i == 3 ) return;
					var tl = gsap.timeline({
						scrollTrigger: {
							trigger: "#pin",
							snap: {
								snapTo: 1,
								duration: { min: 0.4, max: 1 },
								delay: 0.1
							},
							onToggle: (self)=> {
								image.classList.toggle('wavy')
							},
							start: () => "top -" + (window.innerHeight * (i + 0.5)),
							end: () => "+=" + window.innerHeight,							
							scrub: true,
							toggleActions: "play none reverse none",
							invalidateOnRefresh: true,
						}
					})
					tl.to(image, {
						y: "-120%"
					});

				});

				texts.forEach((text, i) => {
					var tl = gsap.timeline({
						scrollTrigger: {
							trigger: "#pin",
							start: () => "top -" + (window.innerHeight * i),
							end: () => "+=" + window.innerHeight,
							scrub: true,
							snap: {
								snapTo: 0.5,
								duration: { min: 0.7, max: 1.7 },
								delay: 0.1
							},
							onEnter: ()=> {
								changeFace(i)
								document.body.style.background = backgroundColors[i];
							},
							onEnterBack : ()=> {
								document.body.style.background = backgroundColors[i];
								changeFace(i)
							},
							toggleActions: "play none reverse none",
							invalidateOnRefresh: true,
						}
					})
					tl.to(text, {
						duration: 0.33,
						opacity: 1,
						y: "0%"
					}).to(text, {
						duration: 0.33,
						opacity: 0,
						y: "-100%"
					}, 0.66);
				});


				ScrollTrigger.create({
					trigger: "#pin",
					scrub: true,
					// markers: true,
					pin: true,
					start: () => "top center-=250px",
					end: () => "+=" + ((images.length) * window.innerHeight),
					onEnter: () => {
						gsap.to(document.body, {
							duration: 0.33,
							background: backgroundColors[0]
						})
					},
					onLeave: () => {
							gsap.to(document.body, {
							duration: 0.33,
							background: "white"
						})
					},
					onLeaveBack: () => {
							gsap.to(document.body, {
							duration: 0.33,
							background: "white"
						})
					},
					invalidateOnRefresh: true,
				});
			})
			
		</script>
<?php 
		endwhile;
	endif;
get_footer(); 

?>