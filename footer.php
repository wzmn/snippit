<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<style>
	.download-fixed {
		position: fixed;
		bottom: 20px;
		left: 20px;
	}
	.social-icons a {
		padding: 0px 8px;
		border-radius: 50%;
		color: white;
		fill: white;
		font-size: 1rem;
		display: flex;
		height: 30px;
		width: 30px;
		justify-content: center;
		align-items: center;
	}
	a.facebook {
		background: #1877f2;
	}
	a.linkedin {
		background: #004182;
	}
	a.instagram {
		background: #405de6;
	}
</style>
</main>
	<div class="download-fixed">
		<button class="download flex items-center px-3 py-2 shadow float mb-5">
			<svg xmlns="http://www.w3.org/2000/svg" width="29" height="36" viewBox="0 0 28.74 35.253" class="">
			<g id="apple-logo" transform="translate(-2.104)">
				<g id="Group_1147" data-name="Group 1147" transform="translate(2.104)">
				<path id="Path_39078" data-name="Path 39078" d="M18.2,0h.251a7.549,7.549,0,0,1-1.9,5.689,5.893,5.893,0,0,1-5.187,2.435,7.322,7.322,0,0,1,1.935-5.512A8.358,8.358,0,0,1,18.2,0Z" transform="translate(2.957)"/>
				<path id="Path_39079" data-name="Path 39079" d="M30.844,22.867v.07a20.511,20.511,0,0,1-2.935,5.658c-1.119,1.54-2.491,3.613-4.94,3.613-2.116,0-3.522-1.361-5.691-1.4-2.294-.037-3.556,1.138-5.653,1.433h-.715A6.388,6.388,0,0,1,7.222,29.7,22.269,22.269,0,0,1,2.1,16.89V15.313a10.331,10.331,0,0,1,4.511-8.48A7.618,7.618,0,0,1,11.73,5.649a12.866,12.866,0,0,1,2.506.718,6.92,6.92,0,0,0,2.5.751A6.012,6.012,0,0,0,18.5,6.581c1.728-.624,3.421-1.339,5.653-1a7.843,7.843,0,0,1,5.763,3.437,7.4,7.4,0,0,0-3.757,7.338A7.575,7.575,0,0,0,30.844,22.867Z" transform="translate(-2.104 3.009)"/>
				</g>
			</g>
			</svg>
		</button>
		<button class="download flex items-center px-3 py-2 shadow float-2">
			<svg id="google-play" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="" width="29" height="36" viewBox="0 0 31.585 35.184">
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
		</button>
	</div>
	<footer class="bg-white">
		<div class="container mx-auto flex flex-col border-b-[#e9e9e9] border-t-[#e9e9e9] border-r-0 border-l-0 border-t border-b px-5">
			<div class="text-3xl md:text-5xl w-3/5 font-light my-20">
				Essential Services, at Your Fingertips
			</div>
			<div class="flex mb-0 md:mb-10 flex-col md:flex-row">
				<div class="flex-1 mb-5">
				<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
					if ($custom_logo_id) { ?>
						<img src="<?php echo wp_get_attachment_image_src( $custom_logo_id, 'full' )[0]; ?>" class="max-w-[170px] mb-3">
					<?php }
						
				?>
					
					<div class="mb-3">One stop platform for essential services</div>
					<div class="mb-3">ABN - 30 664 818 848</div>
					<div class="flex social-icons">
						<a href="https://www.facebook.com/Snippit-105872775751433" target="_blank" class="mb-2 mr-2 facebook">
							<i class="fa fa-facebook"></i>
						</a>
						<a href="https://www.linkedin.com/company/snippit-pty-ltd/" target="_blank" class="mb-2 mr-2 linkedin">
							<i class="fa fa-linkedin"></i>
						</a>
						<a href="https://www.instagram.com/snippit_pty/" target="_blank" class="mb-2 mr-2 instagram">
							<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
								<g>
									<g>
										<path d="M404.831,94.739c-6.853,0-12.43,5.577-12.43,12.43s5.577,12.43,12.43,12.43c6.854,0,12.43-5.576,12.43-12.43
											S411.685,94.739,404.831,94.739z"/>
									</g>
								</g>
								<g>
									<g>
										<path d="M256,145.804c-60.762,0-110.196,49.434-110.196,110.196c0,60.762,49.434,110.197,110.196,110.197
											c60.763,0,110.197-49.434,110.197-110.196C366.197,195.239,316.763,145.804,256,145.804z"/>
									</g>
								</g>
								<g>
									<g>
										<path d="M371.643,0H140.357C62.964,0,0,62.964,0,140.358v231.285C0,449.037,62.964,512,140.357,512h231.286
											C449.037,512,512,449.036,512,371.643V140.358C512,62.964,449.037,0,371.643,0z M256,396.432
											c-77.435,0-140.431-62.997-140.431-140.432S178.566,115.57,256,115.57S396.432,178.566,396.432,256S333.434,396.432,256,396.432z
											M404.831,149.836c-23.526,0-42.666-19.14-42.666-42.666c0-23.526,19.14-42.667,42.666-42.667
											c23.526,0,42.666,19.14,42.666,42.666S428.357,149.836,404.831,149.836z"/>
									</g>

							</svg>
						</a>
					</div>

				</div>
				<div class="flex-1 mb-5">
					<div class="font-bold">Address</div>
					<p class="text-base py-1 mb-0">22-30 Wallace Avenue, <br>Point Cook, VIC – 3030</p>
				</div>
				<div class="flex-1 mb-5">
					<div class="font-bold">Quick Links</div>
					<ul class="list-none">
						<li class="py-1">
							<a href="/privacy-policy/">Privacy Policy</a>
						</li>
						<li class="py-1">
							<a href="/refund-policy/">Refund Policy</a>
						</li>
						<li class="py-1">
							<a href="/terms-conditions/">Terms & Conditions</a>
						</li>
					</ul>
				</div>
				<div class="flex-1 mb-5">
					<div class="font-bold">Contact</div>
					<ul class="list-none">
						<li class="py-1"><i class="fa fa-phone mr-2"></i>+61 1300 589 704</li>
						<li class="py-1"><i class="fa fa-envelope-o mr-2"></i>enquiries@snippit.com.au</li>
						<li class="py-1"><i class="fa fa-envelope-o mr-2"></i>support@snippit.com.au</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container mx-auto">
			<div class="flex justify-center p-5">
				<div class="text-sm">Copyright © 2022 - 2023 Snippit all rights reserved </div>
			</div>
		</div>
		
	</footer>
	<script type="text/javascript">
		((w, d, g)=>{
			Object.assign(w.__proto__, {
				// ********************************************
				// Add your global functions and variables here
				// ********************************************
				smoothScrollTo(){
					Array.from(d.querySelectorAll("[href*='#']:not([onclick])")).map((s, idx)=>{
						s.addEventListener("click", function(event){
							gsap.to(w, {
								scrollTo: d.querySelector(`[${event.target.hash.substr(1)}]`).offsetTop,
								duration: idx + 2
							})
						})
					})
				},
				fillForm(){
					d.querySelector(`[name="name"]`).value = "XYZ69 LLC"
					d.querySelector(`[name="abn"]`).value = "ABNXYZ6972"
					d.querySelector(`[name="owner.email"]`).value = "wisemanf@cogncise.com"
					d.querySelector(`[name="address.pincode"]`).value = "452001"
					d.querySelector(`[name="owner.mobile_number"]`).value = "+611300589704"
					d.querySelector(`[type="submit"]`).click()
				},
				ifExists(s, cb){
					if (typeof s === 'string'){
						if (!!d.querySelector(s)){
							if (cb){
								cb(Array.from(d.querySelectorAll(s)));
							}else{
								return true;
							}
						}else{
							return false;
						}
					}else{
						console.warn("Not a selector")
					}					
				}
			})
		})(window, document, gsap)


		function toggleMobileMenu(){
			document.querySelector('.mobile-menu').classList.toggle('active')
			document.querySelector('body').classList.toggle('menu-open')
		}

		document.addEventListener("DOMContentLoaded", function(){
			AOS.init();
			smoothScrollTo();
			ifExists('[hero] div.absolute>img', (e) => {
				let hero = document.querySelector("[hero]");
				
				let tl = gsap.timeline({
					duration: 0.1,
					scrollTrigger: {
						trigger: hero,
						start: () => "top top",
						end: () => "+=800 center",
						//markers: true,
						onUpdate: self => {
							e[0].style.transform = `rotate(${Math.round(self.progress.toFixed(4) * 180)}deg)`
							e[1].style.transform = `rotate(-${Math.round(self.progress.toFixed(4) * 180)}deg)`
						},
						onEnterBack : ()=> {

						},
						toggleActions: "play none reverse none",
						invalidateOnRefresh: true,
					}
				});
			})
			ifExists('[how-it-works]', ()=>{
				let hiw = document.querySelector("[how-it-works]");
				tl = gsap.timeline({
					scrollTrigger: {
						trigger: "[how-it-works]",
						//markers: true,
						start: () => "top center",
						end: () => "+=" + hiw.offsetHeight,	
						// onLeave: ()=>{
						// 	gsap.to(document.body, {
						// 		background: "white"
						// 	})
						// },					
						// onLeaveBack: ()=>{
						// 	gsap.to(document.body, {
						// 		background: "white"
						// 	})
						// },	
						toggleActions: "play none reverse none",
						invalidateOnRefresh: true,
					}
				});

				// tl.to(document.body, {
				// 	// duration: 0.33,
				// 	background: "#e7efef"
				// }).to(document.body, {
				// 	// duration: 0.33,
				// 	background: "#ecf6da"
				// }).to(document.body, {
				// 	// duration: 0.33,
				// 	background: "#d6e9fb"
				// })
			})
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
					delay: 0.8,
					scale: 1.3,
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
	<?php wp_footer();?>
</body>