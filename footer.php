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
	<footer>
		<div class="container mx-auto flex flex-col border-b-[#e9e9e9] border-t-[#e9e9e9] border-r-0 border-l-0 border-t border-b px-5">
			<div class="text-3xl md:text-5xl w-3/5 font-light my-20">
				Essential Services, at Your Fingertips
			</div>
			<div class="flex mb-10 flex-col md:flex-row">
				<div class="flex-1">
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
			<div class="flex justify-center p-5">
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
		window.addEventListener('scroll',(event) => {
			if (!document.body.classList.contains("home")) return;
			if (window.scrollY > 2748 && window.scrollY < 3000) {
				document.body.classList.add("green")
			} else {
				document.body.classList.remove("green")
			}
			if (window.scrollY > 3000 && window.scrollY < 3500) {
				document.body.classList.add("cyan")
			} else {
				document.body.classList.remove("cyan")
			}
			if (window.scrollY > 3500 && window.scrollY < 3750) {
				document.body.classList.add("yellow")
			} else {
				document.body.classList.remove("yellow")
			}
			if (window.scrollY > 3750 && window.scrollY < 4500) {
				document.body.classList.add("blue")
			} else {
				document.body.classList.remove("blue")
			}
		});

		document.addEventListener("DOMContentLoaded", function(){
			//var controller = new ScrollMagic.Controller();
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
	<?php wp_footer();?>
</body>