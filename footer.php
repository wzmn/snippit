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
						<!-- <i class="fa fa-facebook mb-2 mr-5"></i> -->
						<!-- <i class="fa fa-instagram mb-2 mr-5"></i> -->
					</div>

				</div>
				<div class="flex-1 mb-5">
					<div class="font-bold">Company</div>
					<p class="text-base py-1 mb-0">22-30 Wallace Avenue, <br>Point Cook, VIC – 3030</p>
				</div>
				<div class="flex-1 mb-5">
					<div class="font-bold">Quick Links</div>
					<ul class="list-none">
						<li class="py-1">
							<a href="/privacy-policy/">Privacy Policy</a>
						</li>
						<li class="py-1">
							<a href=""></a>
						</li>
						<li class="py-1">Terms & Conditions</li>
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
				<!-- <div class="flex-1 mb-10">
					<div class="font-bold">Address</div>
					<p>22-30 Wallace Avenue, Point Cook, VIC – 3030</p>
				</div> -->
			</div>
		</div>
		<div class="container mx-auto">
			<div class="flex justify-center p-5">
				<div class="text-sm">Copyright © 2022 - 2023 Snippit all rights reserved </div>
			</div>
		</div>
		
	</footer>
	<script type="text/javascript">
		((w, d)=>{
			Object.assign(w.__proto__, {
				// ********************************************
				// Add your global functions and variables here
				// ********************************************
				fillForm(){
					let d  = document;
					d.querySelector(`[name="name"]`).value = "XYZ69 LLC"
					d.querySelector(`[name="abn"]`).value = "ABNXYZ6972"
					d.querySelector(`[name="owner.email"]`).value = "wisemanf@cogncise.com"
					d.querySelector(`[name="address.pincode"]`).value = "452001"
					d.querySelector(`[name="owner.mobile_number"]`).value = "+611300589704"
					document.querySelector(`[type="submit"]`).click()
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
		})(window, document)


		function toggleMobileMenu(){
			document.querySelector('.mobile-menu').classList.toggle('active')
			document.querySelector('body').classList.toggle('menu-open')
		}

		document.addEventListener("DOMContentLoaded", function(){
			AOS.init();
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
						// markers: true,
						start: () => "top center",
						end: () => "+=" + hiw.offsetHeight,	
						onLeave: ()=>{
							gsap.to(document.body, {
								background: "white"
							})
						},					
						onLeaveBack: ()=>{
							gsap.to(document.body, {
								background: "white"
							})
						},	
						toggleActions: "play none reverse none",
						invalidateOnRefresh: true,
					}
				});

				tl.to(document.body, {
					duration: 0.33,
					background: "#e7efef"
				}).to(document.body, {
					duration: 0.33,
					background: "#ecf6da"
				}).to(document.body, {
					duration: 0.33,
					background: "#d6e9fb"
				})
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