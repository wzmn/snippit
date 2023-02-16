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

		<div class="bg-blue-dark top-0 fixed h-full w-full bg-opacity-75 z-50 flex hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modal">
		  <div class="fixed inset-0 z-10 overflow-y-hidden">
		    <div class="flex h-full items-center justify-center p-4 text-center sm:p-0 modal-content">
		      <div class="relative transform rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-7xl">
		      	<div class="absolute cursor-pointer right-1 top-1" toggle-modal>
					<svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg>
		      	</div>
		        <div class="bg-white px-5 py-10">
		          <div class="sm:flex sm:items-center justify-center">
		            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
		              <div class="text-4xl font-bold mb-7 text-center">Ready to accelerate your company's CX transformation?</div>
		              <div class="text-center mb-7">Let's get started</div>
						<form class="">
							<div class="grid grid-cols-2 gap-x-2">
								<input type="text" name="firstname"  placeholder="First Name" required class="mb-5 p-2 border border-cyan">
								<input type="text" name="lastname" placeholder="Last Name" required class="mb-5 p-2 border border-cyan">
								<input type="email" name="email" placeholder="Business Email" required class="mb-5 p-2 border border-cyan">
								<input type="text" name="country" placeholder="Country" required class="mb-5 p-2 border border-cyan">
							</div>
							<textarea rows="4" placeholder="Comments" class="w-full mb-5 p-2 border border-cyan"></textarea>
							<div class="flex w-full justify-center">
								<input type="submit" value="CONTACT US" class="px-6 py-2 border border-cyan text-blue-dark hover:bg-blue hover:text-white">
							</div>
						</form>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>

	</main>
	<footer class="font-regular bg-blue-dark">
		<div class="container py-12 mx-auto px-10">
			<div class="flex flex-col justify-center items-center">
				<div class="mb-16">
					<img alt="logo" class="max-w-[190px]" src="<?php echo get_stylesheet_directory_uri(); ?>/images/c-white.png">
				</div>
				<div class="w-full mb-16">
					<?php 
						wp_nav_menu(array(
							'menu'				=> "Footer menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
							'menu_class'		=> "flex text-white justify-between flex-wrap", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
							'before'			=> "<span>", // (string) Text before the link markup.
							'after'				=> "</span>", // (string) Text after the link markup.
							'add_li_class'  => 'mb-2 mr-2'
						) );
					?>
				</div>
				<div class="mb-10 text-center flex-1">
					<p class="text-white mb-5 font-bold text-xl">Sign up for our eNewsletter</p>
					<p class="text-white mb-5 text-base">Stay ahead with the latest APAC customer experience best practices, industry trends, and digital innovations to meet the demands of tomorrow's customer expectation.</p>
					<form class="flex justify-center flex-col md:flex-row">
						<input class="bg-white border border-white px-4 py-2 mr-0 md:mr-2 mb-2 md:mb-0" placeholder="Email Address *" type="email" name="subscribe" />
						<input class="bg-blue text-white py-1 px-6" type="submit" value="Subscribe" />
					</form>
				</div>
				<div class="flex justify-between w-full items-end">
					<div class="flex flex-1">
						<i class="fa-brands mr-5 text-white text-xl fa-twitter"></i>
						<i class="fa-brands mr-5 text-white text-xl fa-linkedin"></i>
						<i class="fa-brands mr-5 text-white text-xl fa-instagram"></i>
					</div>
					<div class="text-white text-base flex-1 text-right">© <?php echo date("Y"); ?> COGNCISE. All rights reserved.</div>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/javascript">
		function ifExists(selector, cb){
			!!document.querySelector(selector) ? cb() : '';
		}
		function toggleMobileMenu(){
			document.querySelector('.mobile-menu').classList.toggle('active')
			document.querySelector('body').classList.toggle('menu-open')
		}
		document.querySelectorAll("[toggle-modal]").forEach((item)=>{
			item.addEventListener("click", (event) => {
				event.preventDefault();
				document.getElementById("modal").classList.toggle("hidden")
			})
		})
		document.addEventListener("DOMContentLoaded", function(){
			AOS.init();
			var controller = new ScrollMagic.Controller();

			window.rc = function rotateCircle(deg, step) {
				let container = document.querySelector('.circle');
				let cubes = document.querySelectorAll('.circle .item');
				container.style.transform = `rotate(${deg}deg)`;
				cubes.forEach(function(cube){
					cube.style.transform = `rotate(-${deg + (60 * step)}deg)`;
				})
			}
			ifExists('.siema', function(){
				const mySiema = new Siema({
				  selector: '.siema',
				  duration: 1200,
				  easing: 'ease-out',
				  perPage: 4,
				  startIndex: 0,
				  draggable: true,
				  multipleDrag: true,
				  threshold: 20,
				  loop: true,
				  rtl: true,
				  onInit: (s) => {
				  	document.querySelector(".siema>div").classList.add("flex")
				  	document.querySelector(".siema>div").classList.add("items-center")
				  },
				  onChange: () => {},
				});				
			})
			ifExists('.siema-banner', ()=>{
				const banner = new Siema({
				  selector: '.siema-banner',
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
			})
			ifExists('.siema-card', ()=>{
				window.card = new Siema({
				  selector: '.siema-card',
				  duration: 1200,
				  easing: 'ease-out',
					perPage: {
					    768: 1,
					    1024: 3,
					  },
				  startIndex: 0,
				  draggable: true,
				  multipleDrag: true,
				  threshold: 20,
				  loop: false,
				  rtl: false,
				  onInit: (s) => {
				  	// document.querySelector(".siema>div").classList.add("flex")
				  	// document.querySelector(".siema>div").classList.add("items-center")
					setInterval(() => {
						card.resizeHandler();
					}, 1000);
				  },
				  onChange: () => {},
				});				
			})
			setInterval(() => {
				if ( document.hasFocus() && typeof mySiema !== 'undefined' ) {
					mySiema.next();
				}
			}, 1200)
			setInterval(() => {
				if ( document.hasFocus() && typeof banner !== 'undefined' ) {
					banner.next()
				}
			}, 4000)

			ifExists('#pinBox', ()=>{
				//create a scene
				var isMobile = (function(a){return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4));})(navigator.userAgent||navigator.vendor||window.opera);
				if (!isMobile) {
					new ScrollMagic.Scene({
						duration: 1000,	
						offset: 220,	
						triggerElement: "#pinBox"
					})
					.setPin("#pinBox") 
					.addTo(controller).on("progress", function (e) {
						// let scrollingUp = Math.round(window.oldScroll) >  Math.round(window.scrollY);
						// window.oldScroll = window.scrollY;
						let inputs = document.querySelectorAll('.perspective input')
						if (e.progress.toFixed(1) < parseFloat(0.3)){
							inputs[0].checked = true;
						}
						if (e.progress.toFixed(1) > parseFloat(0.3)) {
							inputs[1].checked = true;
						}
						if (e.progress.toFixed(1) > parseFloat(0.7)) {
							inputs[2].checked = true;
						}
						AOS.refresh()
					});			
				} else {
					// do nothing	
				}
	
			})
			ifExists("#scrollPin", ()=>{
				const scrollContainer = document.querySelector(".overflow-x-scroll");
				new ScrollMagic.Scene({
					duration: scrollContainer.offsetWidth + 150,	
					offset: scrollContainer.offsetHeight,	
					triggerElement: "#scrollPin"
				})
				.setPin("#scrollPin")
				.addTo(controller).on('enter', ()=>{
					 card.resizeHandler();
				}).on("progress", function (e) {
					
					scrollContainer.scrollLeft = Math.round(e.progress.toFixed(3) * scrollContainer.offsetWidth / 1);
				});

			})

			ifExists("#roll", ()=>{
				// All these elements are on the home page so it's safe to add all these under one condition
				new ScrollMagic.Scene({triggerElement: "#roll", offset: 0})
				// trigger animation by adding a css class
				.setClassToggle(".off", "on")
				.addTo(controller);


				new ScrollMagic.Scene({triggerElement: "#circlePin", offset: 0})
				// trigger animation by adding a css class
				.setClassToggle(".off", "on")
				.addTo(controller);

				const cubeContainer = document.querySelector("#cube");
				new ScrollMagic.Scene({
					//duration: cubeContainer.offsetHeight,	
					//offset: -250,	
					triggerElement: "#cube"
				})
				.setClassToggle(".arrow-image", "top").addTo(controller);
				new ScrollMagic.Scene({
					//duration: cubeContainer.offsetHeight,	
					//offset: -250,	
					triggerElement: "#cube"
				}).setClassToggle('.cube-img-top', 'top').addTo(controller);


				const circlePin = document.querySelector("#circlePin");
				let text = document.querySelectorAll('.circle-text > .fade');

				function setActive(item){
					text.forEach((x,i) => {
						if (item == i) {
							x.classList.add('active')
						}else{
							x.classList.remove('active')
						}
					})
				}


				let cubeOffset = 14;
				new ScrollMagic.Scene({
					duration: 2000,	
					offset: 200,	
					triggerElement: "#circlePin"
				})
				.setPin("#circlePin") 
				.addTo(controller).on("progress", function (e) {
					if (Math.round(e.progress.toFixed(3) * 100) < 23) {
						setActive(0)
						rc(cubeOffset, 0)
					}
					if (Math.round(e.progress.toFixed(3) * 100) > 23) {
						setActive(1)
						rc(45, 1)
					}
					if (Math.round(e.progress.toFixed(3) * 100) > 48) {
						setActive(2)
						rc(45 * 2, 2)
					}
					if (Math.round(e.progress.toFixed(3) * 100) > 68) {
						setActive(3)
						rc(45 * 3, 3)
					}
					if (Math.round(e.progress.toFixed(3) * 100) > 88) {
						setActive(4)
						rc(45 * 4 - cubeOffset, 4)
					}				
				});

			})


			ifExists(".siema-trends", ()=>{
				window.trends = new Siema({
				  selector: '.siema-trends',
				  duration: 1200,
				  easing: 'ease-out',
				  perPage: 3,
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

				document.querySelector('.prev.absolute').addEventListener('click', () => trends.prev());
				document.querySelector('.next.absolute').addEventListener('click', () => trends.next());				
			})
		})

	</script>
<?php wp_footer(); ?>

</body>
</html>