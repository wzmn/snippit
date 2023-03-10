<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php cogncise_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/fontawesome.min.css">
	<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script> -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri() . '/MorphSVGPlugin3.js';?>"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.5.2/smooth-scrollbar.js"></script>

	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/siema@1.5.1/dist/siema.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<nav class="relative bg-white sticky top-0 z-30 w-full bg-white shadow-sm">
		<div class="container mx-auto flex justify-between items-center px-5 py-4">
			<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
				if ($custom_logo_id) :
					$image = wp_get_attachment_image_src( $custom_logo_id, 'full' );
			?>
			<a href="<?php echo get_home_url(); ?>" name="logo">
				<span class="text-2xl font-extrabold text-blue-600">
					 <img alt="logo" class="max-w-[170px]" src="<?php echo $image[0]; ?>">
				</span>
			</a>
			<?php endif; ?>
			<?php 
				wp_nav_menu(array(
					'menu'				=> "Main menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
					'menu_class'		=> "hidden md:flex", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
					//'before'			=> "<span class='relative block py-6 px-2 lg:p-6 text-sm p-2 font-light text-gray-600'>", // (string) Text before the link markup.
					//'after'				=> "</span>", // (string) Text after the link markup.
					'walker' => new Tailwind_Menu_Walker()
				) );
			?>
			<a href="#" onclick="toggleMobileMenu();" class="items-center justify-center md:hidden sm:flex">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="fill: black;width: 20px;"><path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
			</a>
		</div>
	</nav>
	<nav class="mobile-menu fixed">
		<div class="close-btn">
			<svg onclick="toggleMobileMenu();" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="15"><path d="M310.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L160 210.7 54.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L114.7 256 9.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 301.3 265.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L205.3 256 310.6 150.6z"/></svg>
		</div>
		<?php 
				wp_nav_menu(array(
					'menu'				=> "Mobile Menu", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
					'menu_class'		=> "flex flex-col", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
				) );
			?>
	</nav>
	<main class="font-regular relative">