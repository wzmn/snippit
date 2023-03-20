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

</main>
	<footer class="bg-white">
		<div class="container mx-auto flex flex-col border-b-[#e9e9e9] border-t-[#e9e9e9] border-r-0 border-l-0 border-t border-b px-5">
			<div class="text-3xl md:text-5xl w-3/5 font-light my-20">
				Essential Services, at Your Fingertips
			</div>
			<div class="flex mb-10 flex-col md:flex-row">
				<div class="flex-1 mb-10">
				<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
					if ($custom_logo_id) { ?>
						<img src="<?php echo wp_get_attachment_image_src( $custom_logo_id, 'full' )[0]; ?>" class="max-w-[190px] mb-3">
					<?php }
						
				?>
					
					<div class="mb-3">One stop platform for essential services</div>

					<div class="flex">
						<i class="fa-brands mr-5 text-white text-xl fa-twitter"></i>
						<i class="fa-brands mr-5 text-white text-xl fa-linkedin"></i>
						<i class="fa-brands mr-5 text-white text-xl fa-instagram"></i>
					</div>

				</div>
				<div class="flex-1 mb-10">
					<div class="font-bold">Company</div>
					<p>22-30 Wallace Avenue, Point Cook, VIC – 3030</p>
				</div>
				<div class="flex-1 mb-10">
					<div class="font-bold">Quick Links</div>
					<ul class="list-none">
						<li class="py-1">Privacy Policy</li>
						<li class="py-1">Refund Policy</li>
						<li class="py-1">Terms & Conditions</li>
					</ul>
				</div>
				<div class="flex-1 mb-10">
					<div class="font-bold">Contact</div>
					<ul class="list-none">
						<li class="py-1">1300589704</li>
						<li class="py-1">enquiries@snippit.com.au</li>
						<li class="py-1">support@snippit.com.au</li>
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
				<div>Copyright © 2022 - 2023 Snippit all rights reserved </div>
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
						end: () => "+=1000 center",
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