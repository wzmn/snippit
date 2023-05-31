<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();?>
	<div class="container mx-auto mb-20 px-4">
		<div class="py-10 md:py-20">

			<div class="text-5xl font-light mb-10">
				<?php the_title();?>
			</div>
			<!-- <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""> -->

		</div>
		<div class="leading-loose">
			<?php the_content();?>
		</div>

	</div>

<?php endwhile; // End of the loop.

get_footer();
